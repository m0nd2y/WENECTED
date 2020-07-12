from PIL import Image     #pip install pillow
from pytesseract import * #pip install pytesseract
import configparser
import os
import sqlite3

#Config Parser 초기화
config = configparser.ConfigParser()
#Config File 읽기
config.read(os.path.dirname(os.path.realpath(__file__)) + os.sep + 'envs' + os.sep + 'property.ini')

#이미지 -> 문자열 추출
def ocrToStr(fullPath, outTxtPath, fileName, lang='eng'): #디폴트는 영어로 추출
    #이미지 경로

    img = Image.open(fullPath)
    txtName = os.path.join(outTxtPath,fileName.split('.')[0])

    #추출(이미지파일, 추출언어, 옵션)
    #preserve_interword_spaces : 단어 간격 옵션을 조절하면서 추출 정확도를 확인한다.
    #psm(페이지 세그먼트 모드 : 이미지 영역안에서 텍스트 추출 범위 모드)
    #psm 모드 : https://github.com/tesseract-ocr/tesseract/wiki/Command-Line-Usage
    outText = image_to_string(img, lang=lang, config='--psm 1 -c preserve_interword_spaces=1')

    print('+++ OCT Extract Result +++')
    print('Extract FileName ->>> : ', fileName, ' : <<<-')
    print('\n\n')
    #출력
    print(outText)
    #추출 문자 텍스트 파일 쓰기
    strToTxt(txtName, outText)

#문자열 -> 텍스트파일 개별 저장
def strToTxt(txtName, outText):
    with open(txtName + '.txt', 'w', encoding='utf-8') as f:
        f.write(outText)

#메인 시작
if __name__ == "__main__":

    #텍스트 파일 저장 경로
    outTxtPath = os.path.dirname(os.path.realpath(__file__))+ config['Path']['OcrTxtPath']

    #OCR 추출 작업 메인
    for root, dirs, files in os.walk(os.path.dirname(os.path.realpath(__file__)) + config['Path']['OriImgPath']):
        for fname in files:
            fullName = os.path.join(root, fname)
            #한글+영어 추출(kor, eng , kor+eng)
            ocrToStr(fullName, outTxtPath, fname,'kor+eng')

    txtName = os.path.join(outTxtPath,fname.split('.')[0]) + '.txt'

    r = open(txtName, mode='rt', encoding='utf-8')
    f = r.read()
    db = "words.db"
    conn = sqlite3.connect(db)
    s = []
    n = []
    result = []
    # Connection 으로부터 Cursor 생성
    cur = conn.cursor()
    cur2 = conn.cursor()
    # SQL 쿼리 실행
    #query = "select * from {0}".format(table)
    query = "SELECT south FROM words"
    cur.execute(query)
 
    # 데이타 Fetch
    rows = cur.fetchall() # 모든 데이터를 한번에 클라이언트로 가져옴
    for row in rows :
        s += row

    idx = 0

    while(True):
        if s[idx] in f:
            result.append(s[idx])

        if idx == len(s) - 1 :
            break

        idx = idx + 1

    i = 0
    while(True):
        query = "SELECT north FROM words WHERE south='%s'" % result[i]
        #print (query)
        cur2.execute(query)
        i += 1

        n += cur2.fetchall()
        if( i == len(result)):
            break

    print(result)
    print(n)
    cur.close()