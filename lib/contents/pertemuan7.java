class pertemuan7 {
    public static void main(String[] args) {
        for (int i = 0; i < 10; i++) {
            System.out.println("Teknik Elektro " + i);
        }
        int n = 10;
        int fakultif = 1;
        for (int j = 1; j <= n; j++) {
            fakultif = fakultif * j;
        }
        System.out.println("Hasil 5!= " + fakultif);

        int genap[] = { 2, 4, 6, 8, 10 };
        System.out.println("genap ke-0 = " + genap[0]);
        System.out.println("genap ke-1 = " + genap[1]);

        for (int x = 0; x < 5; x++) {
            System.out.println("genap ke-" + x + " = " + genap[x]);
        }

        int j = 0;
        System.out.println("Menampilkan genap dengan while");
        while (j < 5) {
            System.out.print(genap[j] + " ");
            j++;
        }
        System.out.println();

        j = 0;
        String[] buah = { "Apel", "Anggur", "Durian", "Jambu" };
        System.out.println("menampilkan buah dengan while");
        int jumlahbuah = buah.length;
        while (j < jumlahbuah) {
            System.out.print(buah[j] + " ");
            j++;
        }
        System.out.println();
        System.out.println("jumlah array buah = " + buah.length);

        System.out.println("data1 = ");
        int[][] data1 = { { 1, 2, 3, 4, 5 }, { 6, 7, 8, 9, 10 } };
        for (int baris = 0; baris < 2; baris++) {
            for (int kolom = 0; kolom < 5; kolom++) {
                System.out.print(data1[baris][kolom] + " ");
            }
            System.out.println();
        }
        System.out.println("data2 = ");
        int[][] data2 = { { 11, 12, 13, 14, 15 }, { 16, 17, 18, 19, 20 } };
        for (int baris = 0; baris < 2; baris++) {
            for (int kolom = 0; kolom < 5; kolom++) {
                System.out.print(data2[baris][kolom] + " ");
            }
            System.out.println();
        }
        System.out.println("Hasil Penjumlahan = ");
        int[][] hasil = { { 0, 0, 0, 0, 0 }, { 0, 0, 0, 0, 0 } };
        for (int baris = 0; baris < 2; baris++) {
            for (int kolom = 0; kolom < 5; kolom++) {
                hasil[baris][kolom] = data1[baris][kolom] + data2[baris][kolom];
                System.out.print(hasil[baris][kolom] + " ");
            }
            System.out.println();
        }

    }

}