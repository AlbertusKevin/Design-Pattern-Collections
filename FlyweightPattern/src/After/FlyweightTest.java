package After;

/*
    Digunakan ketika kita butuh membuat objek dengan jumlah yang sangat besar >20k. Untuk menguragi penggunaan memory, object yang dibuat dan ada objek lain yang mirip-mirip di share, bukan dibuat ulang.

    note: Intrinsic State = color, Extrinsic State = size.
*/

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.Random;

public class FlyweightTest extends JFrame{
    JButton startDrawing;

    int windowWidth = 1750;
    int windowHeight = 700;

    Color[] shapeColor = {Color.orange, Color.red, Color.yellow,
            Color.blue, Color.pink, Color.cyan, Color.magenta,
            Color.black, Color.gray};

    public static void main(String[] args) {
        new FlyweightTest();
    }

    public FlyweightTest(){
        this.setSize(windowWidth, windowHeight);
        this.setLocationRelativeTo(null);
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        this.setTitle("Flyweight Test");

        JPanel contentPane = new JPanel();
        contentPane.setLayout(new BorderLayout());

        final JPanel drawingPanel = new JPanel();

        startDrawing = new JButton("Draw Stuff");

        contentPane.add(drawingPanel, BorderLayout.CENTER);
        contentPane.add(startDrawing, BorderLayout.SOUTH);

        startDrawing.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent event){
                Graphics g = drawingPanel.getGraphics();
                long startTime = System.currentTimeMillis();

                // ketimbang membuat rectangle yang baru tiap saat, rect factory menyimpan setiap rect yang sudah pernah dibuat sebelumnya pada sebuah hash table, sehingga jika muncul parameter yang mirip-mirip dengan rectangle yang sebelumnya, bisa menggunakan rect tersebut.
                for(int i = 0; i < 100000; i++){
                    MyRect rect = RectFactory.getRect(getRandColor());
                    rect.draw(g, getRandX(), getRandY(), getRandX(), getRandY());
                }

                long endTime = System.currentTimeMillis();

                System.out.println("That took "+(endTime - startTime));
            }
        });

        this.add(contentPane);
        this.setVisible(true);
    }

    private Color getRandColor(){
        Random randomGenerator = new Random();

        int randInt =  randomGenerator.nextInt(9);
        return shapeColor[randInt];
    }

    private int getRandX(){ return (int)(Math.random()*windowWidth);  }
    private int getRandY(){ return (int)(Math.random()*windowHeight);  }
}
