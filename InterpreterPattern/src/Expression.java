// class ini berisi method-method abstract yang bertugas mengkonversi ke satuan lainnya. Contoh, jika ingin konversi panjang, maka akan ada fungsi-fungsi yang bernama m, cm, mm, km, dll. Tiap konversi, akan dibuat classnya, dan class-class tersebut extends ke class ini. Proses konversi akan berada dalam real function yang dibuat di subclass dari class ini (subclassnya disebut terminal / concrete expression).

public abstract  class Expression {
    public abstract String gallons(double quantity);
    public abstract String quarts(double quantity);
    public abstract String pints(double quantity);
    public abstract String cups(double quantity);
    public abstract String tablespoons(double quantity);
}
