package nanonano;

import java.util.Scanner;

public class persegi {

	public static void main(String[] args) {
		   
		int input;
		
		Scanner scan = new Scanner(System.in);
		
		System.out.print("masukan inputan : ");        
         input = scan.nextInt();
	     
	      for (int i = 0; i < input; i++) {	      
	        
	         for (int j = 0; j  < input; j++) {
	        	 if(input > 6) {
	        		 if(i==0 && j==0 || i==1 && j==1 || i==2 && j==2 || i==3 && j==3 || 
	        			 i==4 && j==2 || i==5 && j==1 || i==6 && j==0 || j==4 && i ==2 ||
	        			 j==5 && i==1 || j==6 && i==0 ||j==4 && i ==4 || j==5 && i==5 || j==6 && i==6 ) {
	        			 System.out.print("*");
	        		 } else {
	        			 System.out.print("=");
	        		 }
	        	 } else {
	        		 if(i==0 && j==0 || i==1 && j==1 || i==2 && j==2|| 
		        		i==2 && j==2 || i==3 && j==1 || i==4 && j==0 || i ==1 && j == 3 || i==0 && j==4
		        		|| i==3 && j ==3 ||i==4 & j==4) {
		        		 System.out.print("*");
		        	} else {
		        		System.out.print("=");
		        	}
	        	}
	         }     
	        System.out.println();
	      }   
	     
	  }
}
