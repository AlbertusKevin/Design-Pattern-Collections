/*
    Memudahkan menyimpan state sebelumnya dari sebuah objek. Terdapat 3 bagian utama:
        > Memento: objek yang menyimpan state yang berbeda-beda.
        > Originator: Set dan get value dari memento tertentu. Berfungsi juga untuk membuat memento baru dan assign current value ke memento tersebut
        > Caretaker: Menyimpan list yang berisi semua versi memento sebelumnya.
*/

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.*;

public class App extends JFrame {

    public static void main(String[] args) {
        new App();
    }

    private JButton saveBut, undoBut, redoBut;
    private JTextArea theArticle = new JTextArea(40, 60);

    Caretaker caretaker = new Caretaker();
    Originator originator = new Originator();
    int saveFiles = 0, currentArticle = 0;

    public App() {

        this.setSize(750, 780);
        this.setTitle("Memento Design Pattern");
        this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        JPanel panel1 = new JPanel();
        panel1.add(new JLabel("Article"));
        panel1.add(theArticle);

        ButtonListener saveListener = new ButtonListener();
        ButtonListener undoListener = new ButtonListener();
        ButtonListener redoListener = new ButtonListener();

        saveBut = new JButton("Save");
        saveBut.addActionListener(saveListener);

        undoBut = new JButton("Undo");
        undoBut.addActionListener(undoListener);

        redoBut = new JButton("Redo");
        redoBut.addActionListener(redoListener);

        panel1.add(saveBut);
        panel1.add(undoBut);
        panel1.add(redoBut);

        this.add(panel1);
        this.setVisible(true);
    }

    class ButtonListener implements ActionListener {
        public void actionPerformed(ActionEvent e) {
            if (e.getSource() == saveBut) {
                // ketika save article, disimpan pada state saat ini, yaitu oleh originator. Kemudian, akan disimpan ke dalam memento baru dan ditambahkan ke dalam list pada class caretaker
                String textInTextArea = theArticle.getText();

                originator.set(textInTextArea);
                caretaker.addMemento(originator.storeInMemento());

                // untuk menyimpan index ketika state ini yang disimpan di memento, ditambahkan ke dalam caretaker
                saveFiles++;
                currentArticle++;

                System.out.println("Save Files " + saveFiles);
                undoBut.setEnabled(true);
            } else {
                if (e.getSource() == undoBut) {
                    if (currentArticle >= 1) {
                        currentArticle--;

                        // ambil state sebelumnya dari caretaker dengan index
                        String textBoxString = originator.restoreFromMemento(caretaker.getMemento(currentArticle));
                        theArticle.setText(textBoxString);

                        redoBut.setEnabled(true);
                    } else {
                        undoBut.setEnabled(false);
                    }
                } else {
                    if (e.getSource() == redoBut) {
                        if ((saveFiles - 1) > currentArticle) {
                            currentArticle++;
                            String textBoxString = originator.restoreFromMemento(caretaker.getMemento(currentArticle));
                            theArticle.setText(textBoxString);
                            undoBut.setEnabled(true);

                        } else {

                             redoBut.setEnabled(false);

                        }
                    }
                }
            }
        }
    }
}