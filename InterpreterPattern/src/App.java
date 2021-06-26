/*
    Prerequisites, ketahui tentang Java Reflection.

    Design pattern yang jarang digunakan dan biasanya diabaikan. Namun, sangat berguna jika digabungkan dengan Java Reflection. Pattern ini digunakan untuk convert representasi data ke representasi lainnya. Contoh kasus, aplikasi konversi satuan, semisal ukuran 1 gallon ke tablespoons dsb.

    Terdapat 3 bagian,
        > context yang berisi informasi yang akan direpresentasikan,
        > expression berupa abstract class yang berisi semua method yang dibutuhkan untuk konversi yang berbeda-beda,
        > terminal / concrete expression yang menyediakan konversi yang spesifik terhadap tipe data yang berbeda
*/

import java.lang.reflect.*;
import javax.swing.*;

public class App {
    public static void main(String[] args){
        JFrame frame = new JFrame();
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);

        String questionAsked = JOptionPane.showInputDialog(frame, "What is your question");
        ConversionContext question = new ConversionContext(questionAsked);
        String fromConversion = question.getFromConversion();
        String toConversion = question.getToConversion();

        double quantity = question.getQuantity();

        try {

            Class tempClass = Class.forName(fromConversion);

            Constructor con = tempClass.getConstructor();

            Object convertFrom = (Expression) con.newInstance();

            Class[] methodParams = new Class[]{Double.TYPE};

            Method conversionMethod = tempClass.getMethod(toConversion, methodParams);

            Object[] params = new Object[]{new Double(quantity)};

            String toQuantity = (String) conversionMethod.invoke(convertFrom, params);

            String answerToQues = question.getResponse() + toQuantity + " " + toConversion;
            JOptionPane.showMessageDialog(null,answerToQues);

            frame.dispose();

        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        } catch (NoSuchMethodException e) {
            e.printStackTrace();
        } catch (SecurityException e) {
            e.printStackTrace();
        } catch (InstantiationException e) {
            e.printStackTrace();
        } catch (IllegalAccessException e) {
            e.printStackTrace();
        } catch (IllegalArgumentException e) {
            e.printStackTrace();
        } catch (InvocationTargetException e) {
            e.printStackTrace();
        }
    }
}
