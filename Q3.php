public class Consecutive01 {
static int[] a= {0,1,1,0,0,0,1,1,0,0,1,0};
public static void main(String[] args) {
int sum = 0;
int max  = 0 ;
for(int i = 0 ; i< a.length ; i++){
if(a[i] == 0){
 sum = 0;
} else {
  sum++;
if(sum > max)
 max = sum;
}
}
        
System.out.println("Max consecutive 1s is: "+max);
}
    
}