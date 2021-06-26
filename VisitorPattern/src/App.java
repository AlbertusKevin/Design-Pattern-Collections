public class App {
    /*
        Memungkinkan untuk menambah method ke class tanpa mengubah banyak class tersebut. Dengan kata lain, kita dapat extends sebuah class ke class lainnya tanpa harus melakukan perubahan.

        Sebagai contoh, sebuah aplikasi perhitungan pajak, memiliki beberapa item. Tiap item tersebut dibuat classnya masing-masing yang implement interface Visitable. Dalam Visitable, terdapat method accept yang menerima parameter Visitor. Perhitungan pajak dilakukan pada class lain yang implement Visitor. Dalam interface visitor ini, berisi method-method kalkulasi pajak tiap item yang ada. Satu item, satu fungsi, sehingga akan ada beberapa method overloading.

        Jika misalkan terjadi perubahan sementara cara perhitungan pajak, kita cukup tambah class baru yang implement dari Visitor, sehingga kita tidak perlu merubah kodingan pada class perhitungan pajak sebelumnya.
     */
    public static void main(String[] args) {
        TaxVisitor taxCalc = new TaxVisitor();
        TaxHolidayVisitor taxHolidayCalc = new TaxHolidayVisitor();
        Necessity milk = new Necessity(3.47);
        Liquor vodka = new Liquor(11.99);
        Tobacco cigars = new Tobacco(19.99);

        System.out.println(milk.accept(taxCalc) + "\n");
        System.out.println(vodka.accept(taxCalc) + "\n");
        System.out.println(cigars.accept(taxCalc) + "\n");

        System.out.println("TAX HOLIDAY PRICES\n");
        System.out.println(milk.accept(taxHolidayCalc) + "\n");
        System.out.println(vodka.accept(taxHolidayCalc) + "\n");
        System.out.println(cigars.accept(taxHolidayCalc) + "\n");
    }
}
