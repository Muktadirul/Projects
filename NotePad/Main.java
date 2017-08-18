package NotePad;
import javax.swing.*;
public class Main {
    public static void main(String args[]){
        JFrame frame = new C();
        frame.setTitle("NOTEPAD");
        frame.setVisible(true);
        frame.setSize(1366,768);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setResizable(false);
        frame.setLocationRelativeTo(null);
    }
}
