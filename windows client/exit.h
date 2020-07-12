#pragma once
#include <qwidget.h>
#include "qtmaterialflatbutton.h"

//#pragma comment(lib, "D:/Qt Project/LIBRARY/Material/components/debug/components.lib")
//#pragma comment(lib, "D:/Qt Project/LIBRARY/Material/components/release/components.lib")
class Exit : public QWidget
{
public:
	Exit(QWidget *parent = nullptr);
	~Exit();
private:
	QtMaterialFlatButton *m_exitButton;
};

