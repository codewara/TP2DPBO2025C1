#include <bits/stdc++.h>
using namespace std;

class PetShop {
private:
    int ID;
    string nama;
    int harga;
    int stok;

public:
    PetShop () {
        ID = 0;
        nama = "";
        harga = 0;
        stok = 0;
    };

    PetShop (int ID, string nama, int harga, int stok) {
        this->ID = ID;
        this->nama = nama;
        this->harga = harga;
        this->stok = stok;
    }

    void setID(int ID) { this->ID = ID; }
    int getID() { return this->ID; }

    void setNama(const string& nama) { this->nama = nama; }
    string getNama() { return this->nama; }
    
    void setHarga(int harga) { this->harga = harga; }
    int getHarga() { return this->harga; }

    void setStok(const int stok) { this->stok = stok; }
    int getStok() { return this->stok; }

    ~PetShop () { }
};
