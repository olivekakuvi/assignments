package Assignment;

import java.util.Scanner;

public class VolumeCylinder {
    public static void main(String[] args) {
        Scanner radius = new Scanner(System.in);
        System.out.println("Please enter the Radius");
        int rad=radius.nextInt();
        Scanner height = new Scanner(System.in);
        System.out.println("Enter the height");
        int hei= height.nextInt();

        double volume = 22/7*rad*rad*hei;

        System.out.println("The volume of the cylinder is "+volume);

    }
}
