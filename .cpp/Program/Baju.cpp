#include "Aksesoris.cpp"

class Baju: public Aksesoris {
private:
    string target;
    string size;
    string merk;

public:
    Baju () {
        target = "";
        size = "";
        merk = "";
    }

    Baju (string target, string size, string merk) {
        this->target = target;
        this->size = size;
        this->merk = merk;
    }

    Baju (int ID, string nama, string jenis, string bahan, string warna, string target, string size, string merk, int stok, int harga) {
        setID(ID);
        setNama(nama);
        setHarga(harga);
        setStok(stok);
        setJenis(jenis);
        setBahan(bahan);
        setWarna(warna);
        this->target = target;
        this->size = size;
        this->merk = merk;
    }

    void setTarget (const string& target) { this->target = target; }
    string getTarget () { return this->target; }
    
    void setSize (const string& size) { this->size = size; }
    string getSize () { return this->size; }
    
    void setMerk (const string& merk) { this->merk = merk; }
    string getMerk () { return this->merk; }

    ~Baju () { }
};