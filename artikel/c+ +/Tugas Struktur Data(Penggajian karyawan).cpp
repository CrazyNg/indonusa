#include <iostream.h>
#include <conio.h>
#include <stdio.h>

struct karyawan {
char nama[51][30],sm[51];
int lk[51],pd[51],jh[51],ja[51],tank[51],tke[51],gp[51],tk[51];
int t[51],totg[51];
}karyawan;
void tanggal_penggajian()
{
int tgl,bln,thn;
cout<<"Tanggal = ";cin>>tgl;
cout<<"Bulan   = ";cin>>bln;
cout<<"Tahun   = ";cin>>thn;
}
void list_data()
{
int i;
cout<<"masukkan jumlah data = "<<i<<endl;
for (int a=1;a<=i;a++){
cout<<"Nama 		 = "<<karyawan.nama[a]<<endl;
cout<<"Masukkan Pilihan Pendidikan 1/2/3/4/5		= "<<karyawan.pd[a]<<endl;
cout<<"Lama Kerja (Tahun)				= "<<karyawan.lk[a]<<endl;
cout<<"Jumlah Masuk Kerja				= "<<karyawan.jh[a]<<endl;
cout<<"Transport			                = "<<karyawan.t[a]<<endl;
cout<<"Total Gaji			                = "<<karyawan.totg[a]<<endl;
}
}
void entri_data()
{
int i;
cout<<"masukkan jumlah data= ";cin>>i;
cout<<" "<<endl;
for (int a=1;a<=i;a++){
cout<<" "<<endl;
cout<<"Nama 		 = ";cin>>karyawan.nama[a];
cout<<"Masukkan Pilihan Pendidikan 1/2/3/4/5		= ";cin>>karyawan.pd[a];
cout<<"Lama Kerja (Tahun)				= ";cin>>karyawan.lk[a];
cout<<"Jumlah Masuk Kerja				= ";cin>>karyawan.jh[a];
cout<<"Status Menikah(Y/T)				= ";cin>>karyawan.sm[a];
if (karyawan.sm[a]== 'Y'){
cout<<"Jumlah Anak                  	        	= "; cin>>karyawan.ja[a];
  }
  else if(karyawan.sm[a]== 'T'){
  }
  if(karyawan.ja[a]<=0){
  karyawan.tke[a]=150000;
  }
  else if(karyawan.ja[a]<=3){
  karyawan.tke[a]=(75000*karyawan.ja[a]+150000);
  }

if (karyawan.pd[a] == 1){
karyawan.gp[a]= 3000000;
	if(karyawan.lk[a]<= 1){
	karyawan.tk[a]= 0;
	}
	else if(karyawan.lk[a]<=3){
	karyawan.tk[a]= 400000;
	}
   else if(karyawan.lk[a]<=5){
	karyawan.tk[a]= 500000;
	}
   else if(karyawan.lk[a]>=5){
	karyawan.tk[a]= 700000;
	}
}
else if (karyawan.pd[a] == 2){
karyawan.gp[a]= 2500000;
if(karyawan.lk[a]<= 1){
	karyawan.tk[a]= 0;
	}
	else if(karyawan.lk[a]<=3){
	karyawan.tk[a]= 200000;
	}
   else if(karyawan.lk[a]<=5){
	karyawan.tk[a]= 300000;
	}
   else if(karyawan.lk[a]>=5){
	karyawan.tk[a]= 500000;
	}
}
else if (karyawan.pd[a] == 3){
karyawan.gp[a]= 2000000;
if(karyawan.lk[a]<= 1){
	karyawan.tk[a]= 0;
	}
	else if(karyawan.lk[a]<=3){
	karyawan.tk[a]= 100000;
	}
   else if(karyawan.lk[a]<=5){
	karyawan.tk[a]= 200000;
	}
   else if(karyawan.lk[a]>=5){
	karyawan.tk[a]= 400000;
	}
}
else if (karyawan.pd[a] == 4){
karyawan.gp[a]= 1500000;
if(karyawan.lk[a]<= 1){
	karyawan.tk[a]= 0;
	}
	else if(karyawan.lk[a]<=3){
	karyawan.tk[a]= 400000;
	}
   else if(karyawan.lk[a]<=5){
	karyawan.tk[a]= 500000;
	}
}
else if (karyawan.pd[a] == 5){
karyawan.gp[a]= 1000000;
if(karyawan.lk[a]<= 1){
	karyawan.tk[a]= 0;
	}
	else if(karyawan.lk[a]<=3){
	karyawan.tk[a]= 400000;
	}
   else if(karyawan.lk[a]<=5){
	karyawan.tk[a]= 500000;
	}
}

//transport
karyawan.t[a]=(karyawan.jh[a]*10000);
cout<<"Transport			                = "<<karyawan.t[a]<<endl;
cout<<"Tunjangan Kerja                    		= "<<karyawan.tk[a]<<endl;

//total Gaji
karyawan.totg[a]=(karyawan.gp[a]+karyawan.tk[a]+karyawan.t[a]+karyawan.tke[a]);
cout<<"Total Gaji			                = "<<karyawan.totg[a]<<endl;
}
}
main()
{
int Lain;
char lagi;
atas:
cout<<" 		SISTEM PENGGAJIAN KARYAWAN "<<endl;
cout<<"		    PT.WARNA - WARNI "<<endl;
cout<<" 		 =Diyah Ayufitriyaningsih= "<<endl;
cout<<" "<<endl;
cout<<"1. Atur Tanggal Penggajian"<<endl;
cout<<"2. Entri Data"<<endl;
cout<<"3. List Data"<<endl;
cout<<"4. Exit"<<endl;
cout<<"pilihan anda (1-3)? = ";cin>>Lain;
if (Lain==1){
tanggal_penggajian();
cout<<"Kembali ke Menu [Y/T] = ";cin>>lagi;
cout<<""<<endl;
if (lagi =='Y'){
goto atas;
}
}
else if (Lain==2){
entri_data();
cout<<"Kembali ke Menu [Y/T] = ";cin>>lagi;
cout<<""<<endl;
if (lagi =='Y'){
goto atas;
}
}
else if (Lain==3){
list_data();
cout<<"Kembali ke Menu [Y/T] = ";cin>>lagi;
cout<<""<<endl;
if (lagi =='Y'){
goto atas;
}
}
getch();
}
