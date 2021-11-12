#include <iostream>
using namespace std;
int tong(int a, int b);
int hieu(int a, int b);

int main()
{
	int a, b;
	char phepToan;
	cout << "Nhap so nguyen 1: ";
	cin >> a;
	cout << "Nhap so nguyen 2: ";
	cin >> b;
<<<<<<< HEAD
	cout << "Phep toan tru: ";
	cin >> hieu(a, b);
	system("pause");
	return 0;
}
int hieu(int a, int b)
{
	return a-b;
=======
	cout << "Chon phep toan cong:  ";
	cin >> tong(a, b);
	system("pause");
	return 0;
}
int tong(int a, int b)
{
	return a+b;
>>>>>>> c93c755df585efb2e46cf8fb193a4eb0d9a6064b
}