#include "PetShop.cpp"

class Aksesoris: public PetShop {
private:
    string jenis;
    string bahan;
    string warna;

public:
    Aksesoris () {
        jenis = "";
        bahan = "";
        warna = "";
    };

    Aksesoris (string jenis, string bahan, string warna) {
        this->jenis = jenis;
        this->bahan = bahan;
        this->warna = warna;
    }

    void setJenis (const string& jenis) { this->jenis = jenis; }
    string getJenis () { return this->jenis; }
    
    void setBahan (const string& bahan) { this->bahan = bahan; }
    string getBahan () { return this->bahan; }
    
    void setWarna (const string& warna) { this->warna = warna; }
    string getWarna () { return this->warna; }

    ~Aksesoris() { }
};