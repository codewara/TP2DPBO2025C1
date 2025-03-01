from Aksesoris import Aksesoris

class Baju (Aksesoris):
    __target = ""
    __size = ""
    __merk = ""

    def __init__(self, ID=0, nama="", jenis="", bahan="", warna="", target="", size="", merk="", stok=0, harga=0):
        super().__init__(ID, nama, jenis, bahan, warna, stok, harga)
        self.__target = target
        self.__size = size
        self.__merk = merk
    
    def setTarget(self, target):
        self.__target = target

    def getTarget(self):
        return self.__target
    
    def setSize(self, size):
        self.__size = size

    def getSize(self):
        return self.__size
    
    def setMerk(self, merk):
        self.__merk = merk

    def getMerk(self):
        return self.__merk