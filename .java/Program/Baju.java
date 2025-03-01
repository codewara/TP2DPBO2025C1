public class Baju extends Aksesoris {
    private String target;
    private String size;
    private String merk;

    public Baju() {
        this.target = "";
        this.size = "";
        this.merk = "";
    }

    public Baju(String target, String size, String merk) {
        this.target = target;
        this.size = size;
        this.merk = merk;
    }

    public Baju(int ID, String nama, String jenis, String bahan, String warna, String target, String size, String merk, int stok, int harga) {
        setID(ID);
        setNama(nama);
        setHarga(harga);
        setStok(stok);
        setJenis(jenis);
        setBahan(bahan);
        setWarna(warna);
        this.target = target;
        this.size = size;
        this.merk = merk;
    }

    public void setTarget(String target) { this.target = target; }
    public String getTarget() { return this.target; }

    public void setSize(String size) { this.size = size; }
    public String getSize() { return this.size; }

    public void setMerk(String merk) { this.merk = merk; }
    public String getMerk() { return this.merk; }
}
