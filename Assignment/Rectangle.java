package Assignment;

public class Rectangle {
    public Rectangle(){}
    public int Area(int length , int width){
        int ar;
        ar=length*width;
        return ar;
    }

    public static void main(String[] args) {
        Rectangle rect1 = new Rectangle();
        Rectangle rect2 = new Rectangle();

        int area1=rect1.Area(4,5);
        int area2= rect2.Area(5,8);

        System.out.println(area1);
        System.out.println(area2);

    }
}
