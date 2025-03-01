from PetShop import PetShop

class Aksesoris (PetShop):
    __jenis = ""
    __bahan = ""
    __warna = ""

    def __init__(self, ID = 0, nama = "", jenis = "", bahan = "", warna = "", stok = 0, harga = 0):
        super().__init__(ID, nama, harga, stok)
        self.__jenis = jenis
        self.__bahan = bahan
        self.__warna = warna

    def setJenis(self, jenis):
        self.__jenis = jenis

    def getJenis(self):
        return self.__jenis

    def setBahan(self, bahan):
        self.__bahan = bahan

    def getBahan(self):
        return self.__bahan

    def setWarna(self, warna):
        self.__warna = warna

    def getWarna(self):
        return self.__warna