#include <iostream.h>
#include <conio.h>
main()
{
 int n,i,j,data[50],jarak,simpan;
 cout<<"masukkan banyak data : ";cin>>n;
 for(i=0;i<n;i++)
 {
   cout<<"data ke-"<<(i+1)<<" : ";cin>>data[i];
 }

 cout<<"\nsebelum : "<<endl;
 for(i=0;i<n;i++)
   cout<<data[i]<<"  ";

 cout<<endl<<endl;
 jarak=n/2;
 while(jarak>0)
 {
  for(i=jarak;i<n;i++)
   {
    j=i-jarak;
      while(j>=0)
      {
     if(data[j+jarak]<data[j])
     {
      simpan=data[j];
        data[j]=data[j+jarak];
        data[j+jarak]=simpan;

            for(int j=0;j<n;j++) {
       cout<<data[j]<<"  "; }
            cout<<endl;
     }
       j=j-jarak;
      }
  }

  jarak=jarak/2;
}

 cout<<"\nsesudah : ";
 for(i=0;i<n;i++)
   {
    cout<<data[i]<<"   ";
   }

getch();
}