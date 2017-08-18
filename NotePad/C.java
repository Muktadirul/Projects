package NotePad;


import java.awt.Menu;
import java.awt.MenuBar;
import java.awt.MenuItem;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.io.BufferedWriter;
import java.io.FileReader;
import java.io.FileWriter;
import java.util.Scanner;

import javax.swing.JFileChooser;
import javax.swing.JFrame;
import javax.swing.JTextArea;

public class C extends JFrame{
    int fileToOpen;
    int fileToSave;
    JFileChooser fileOpen;
    JFileChooser fileSave;

    C(){
        final JTextArea textArea = new JTextArea();
        MenuBar menuBar= new MenuBar();
        MenuItem menuItem=new MenuItem();
        setMenuBar(menuBar);
        Menu file = new Menu("File");
        menuBar.add(file);
        MenuItem newOption = new MenuItem("NEW");
        MenuItem open = new MenuItem("OPEN");
        MenuItem save = new MenuItem("SAVE");
        MenuItem exit = new MenuItem("EXIT");
        file.add(newOption);
        file.add(open);
        file.add(save);
        file.add(exit);
        getContentPane().add(textArea);

        newOption.addActionListener(new ActionListener(){
            public void actionPerformed(ActionEvent e){
                textArea.setText("");
            }
        });
        open.addActionListener(new ActionListener(){
            public void actionPerformed(ActionEvent e){
                openFile();
                if (fileToOpen == JFileChooser.APPROVE_OPTION){
                    textArea.setText("");
                    try{
                        Scanner scan = new Scanner(new FileReader(fileOpen.getSelectedFile().getPath()));
                        while (scan.hasNext())
                            textArea.append(scan.nextLine());
                    } catch (Exception ex){
                        System.out.println(ex.getMessage());
                    }
                }
            }
        });

        save.addActionListener(new ActionListener(){
            public void actionPerformed(ActionEvent e){
                saveFile();
                if (fileToSave == JFileChooser.APPROVE_OPTION){
                    try {
                        BufferedWriter out = new BufferedWriter(new FileWriter(fileSave.getSelectedFile().getPath()));
                        out.write(textArea.getText());
                        out.close();
                    } catch (Exception ex) {
                        System.out.println(ex.getMessage());
                    }
                }
            }
        });

        exit.addActionListener(new ActionListener(){
            public void actionPerformed(ActionEvent e){
                System.exit(0);
            }
        });
    }

    public void openFile(){
        JFileChooser open = new JFileChooser();
        int option = open.showOpenDialog(this);
        fileToOpen = option;
        fileOpen = open;
    }

    public void saveFile(){
        JFileChooser save = new JFileChooser();
        int option = save.showOpenDialog(this);
        fileToSave = option;
        fileSave = save;
    }

    }

