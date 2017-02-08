#include <stdio.h>
#include <iostream.h>
#include <conio.h>
main()
{
float bulan,bunga,tp,lp,bpt,angsuran,pokok,tb,tpo,ta;
cout<<"Pinjaman anda \n";
cout<<"TOTAL PINJAMAN\t\t=Rp.";cin>>tp;
cout<<"LAMA PINJAMAN\t\t=" ;cin>>lp;
cout<<"BUNGA PER TAHUN\t\t=";cin>>bpt;
cout<<"========================================================================="<<endl;
pokok=tp/lp;
cout<<"Bulan\t\t";
cout<<"Bunga\t\t";
cout<<"Pokok\t\t";
cout<<"Angsuran\t";
cout<<"Sisa Pinjaman\n";
for (bulan=1;bulan<=lp;bulan++)
{
bunga=(tp*bpt/12);

angsuran=pokok+bunga;
tp=tp-pokok;
cout<<bulan;
cout<<"\t\t"<<bunga;
cout<<"\t\t"<<pokok;
cout<<"\t\t"<<angsuran;
cout<<"\t\t"<<tp<<endl;
tb=bunga+tb;
tpo=pokok+tpo;
ta=angsuran+ta;
}
cout<<"========================================================================"<<endl;

cout<<"TOTAL BUNGA\t\t="<<tb<<endl;
cout<<"TOTAL POKOK\t\t="<<tpo<<endl;
cout<<"TOTAL ANGSURAN\t\t="<<ta;
getche();
}