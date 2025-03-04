import javax.swing.*; 
import java.io.*; 
import java.awt.*; 
import java.awt.image.*; 
import javax.imageio.*; 

public class PaintImage extends JPanel 
{ 
  public static BufferedImage image; 
  
  public PaintImage () 
  { 
   // super(); 
    try 
    {                
      image = ImageIO.read(new File("a.jpg")); 
    } 
    catch (IOException e) 
    { 
      //Not handled. 
    } 
  } 

 

  public static void main(String [] args) 
  { 
    JFrame f = new JFrame("Window"); 
    f.add(new PaintImage()); 
   // f.setSize(image.getWidth(), image.getHeight() + 30); 
    f.setVisible(true); 
  } }