package After;

import java.util.HashMap;
import java.awt.Color;

public class RectFactory {
    private static final HashMap<Color, MyRect> rectsByColor = new HashMap<Color, MyRect>();
    public  static MyRect getRect(Color color){
        MyRect rect = (MyRect)rectsByColor.get(color);

        // dicek apakah di hashtable, rectangle dengan color yang sama ada? Jika tidak, buat rect yang baru dan simpan di hashtable. Jika ada, rect tersebut digunakan.
        if(rect == null){
            rect = new MyRect(color);

            rectsByColor.put(color, rect);
        }

        return rect;
    }
}
