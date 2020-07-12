#ifndef TEXTFIELDMANAGER_H
#define TEXTFIELDMANAGER_H

#include "qtmaterialtextfield.h"
#include "qtmaterialdialog.h"
#include <QWidget>

//#pragma comment(lib, "D:/Qt Project/LIBRARY/Material/components/release/components.lib")

class Login : public QWidget
{
public:
    Login(QWidget *parent = nullptr);
private:
	QtMaterialTextField *m_username;
	QtMaterialTextField *m_password;
	QtMaterialDialog *m_loginDialog;
};

#endif // TEXTFIELDMANAGER_H