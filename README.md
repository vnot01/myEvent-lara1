<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
<!-- [![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]
-->


<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/vnot01/myEvent-lara1">
    <img src="images-md/logo-wide.png" alt="Logo" width="287" height="92">
  </a>
<!--   <h3 align="center">MyEvents</h3> -->
  <p align="center">
    An awesome projects!
    <br />
    <a href="https://github.com/vnot01/myEvent-lara1"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/vnot01/myEvent-lara1">View Demo</a>
    ·
    <a href="https://github.com/vnot01/myEvent-lara1">Report Bug</a>
    ·
    <a href="https://github.com/vnot01/myEvent-lara1">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://myevents.com)

Membuat aplikasi Tiketing Event Offline (Pameran, Show, dll) berbasis Web, dari Pembelian Tiket masuk, Validasi Tiket terhadap pengunjung hingga ke Jual Beli sederhana / Poin Of Sales.

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Built With

This section should list any major frameworks/libraries used to bootstrap your project. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.

* [![Laravel][Laravel.com]][Laravel-url] : v10
* [![Vue][Vue.js]][Vue-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url] : v5
* [![JQuery][JQuery.com]][JQuery-url]
* [![Laravel-Nova][Laravel-Nova]][Laravel-Nova-url] : BackEnd Template Using Laravel Nova : v4
* [![Template-HTML][Template-HTML]][Template-HTML-url] : FrontEnd Template Using FestavaLiv

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Getting Started

Ikuti instruksi berikut.

### Installation

Berikut langkah bagaimana menginstal nya di Localhost.
2. Clone the repo
   ```sh
   git clone https://github.com/vnot01/myEvent-lara1.git
   ```
3. Move to Project Directory (myEvent-lara1)
   ```command dir
   cd myEvent-lara1
   ```
4. Install NPM packages
   ```npm
   npm install
   ```
5. Install Composer packages
   ```composer
   composer install
   ```
6. Copy .env.example dengan nama .env
   ```command copy
   cp .env.example .env
   ```
7. Edit .env
   ```.env
    APP_URL=http://127.0.0.1:8000
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=<your db port>
    DB_DATABASE=<your db name>
    DB_USERNAME=<your db username>
    DB_PASSWORD=<your db password>
   ```
8. Generate Database, Table and Seeding
   ```php artisan
   php artisan migrate --seed
   ```
9. Generate New Key
   ```php artisan
   php artisan key:generate
   ```
10. Running Server
   ```php artisan
   php artisan serve
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage
Back End: <a href="http://127.0.0.1:8000/admin/login">Login Admin</a>
```Login:
    Super Admin : superadmin@example.com
    Admin : admin@example.com
    User / Pengunjung / Customer : user@example.com
```
Password:
```Password:  
    password
```


Front End: <a href="http://127.0.0.1:8000/admin/login">Login Admin</a>

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ROADMAP -->
## Roadmap

- [x] Add Changelog
- [x] Add back to top links
- [ ] Add Additional Templates w/ Examples
- [ ] Add "components" document to easily copy & paste sections of the readme
- [ ] Multi-language Support
    - [ ] English
    - [ ] Indonesia

- [x] Modul Pengguna: 
    - [x] Super Admin
    - [x] Admin
    - [ ] Sponsor
    - [ ] Tiketing
    - [ ] Penjaga
    - [ ] Vendor
    - [ ] Customer / Pengunjung
- [ ] Pengguna isian data nya : 
    - [ ] Nama
    - [ ] Nomor HP
    - [ ] Email
    - [ ] Level Pengguna
    - [ ] Tambah Pengguna
    - [ ] Detail Pengguna
    - [ ] Perbaharui Pengguna
    - [ ] Hapus Pengguna
- [ ] Data Customer / Pengunjung:
    - [ ] Daftar Pengunjung
    - [ ] Tambah Pengunjung
    - [ ] NIK
    - [ ] Nama
    - [ ] Nomor HP
    - [ ] Ekspor Data (CSV, XLX)
- [ ] Modul Laporan Visual
    - [ ] Tiket
        - [ ] Laporan Harian Tiket Terjual Chart Bar
        - [ ] Kalkulasi Rata Rata Pembelian Tiket Perjam, Perhari, Semua Waktu.
- [ ] Pengunjung
    - [ ] Laporan Pengunjung Harian Berdasarkan Tiket Chart Bar
    - [ ] Kalkulasi Rata Rata Pengunjung Datang Perjam, Perhari, Semua Waktu
    - [ ] Chart Bar Pengunjung Baru dan Pengunjung Lama
    - [ ] Cashback
- [ ] Modul Tiket
    - [ ] Tambah Tiket
    - [ ] Judul
    - [ ] Deskripsi
    - [ ] Harga
    - [ ] Waktu
    - [ ] Daftar Tiket
    - [ ] Perbaharui Tiket
    - [ ] Hapus Tiket
- [ ] Validasi
    - [ ] Validasi Tiket : Menggunakan Metode Scan Barcode QR, dari Nota
    - [ ] Cetak Tiket : Cetak PDF dan bisa Cetak Printer ada QR nya
    - [ ] Waktu Validasi
- [ ] WA Gateway
- [ ] SMS Gateway
- [ ] Modul QRCode/Barcode Generate QRCode/Barcode Berdasarkan Nomor Tiket dan Waktu Pembelian.
- [ ] Scanner QRCode/Barcode
    - [ ] Check In Time
    - [ ] Check Out Time

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Your Name - [@your_twitter](https://twitter.com/your_username) - email@example.com

Project Link: [https://github.com/your_username/repo_name](https://github.com/your_username/repo_name)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- ACKNOWLEDGMENTS -->
## Acknowledgments

-----

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
<!-- [contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/ 
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/ -->
[product-screenshot]: images-md/screenshot.png
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Laravel-Nova]: https://img.shields.io/badge/Laravel%20Nova-56d7fe?style=for-the-badge&logo=laravel&logoColor=Black
[Laravel-Nova-url]:https://nova.laravel.com/docs/4.0/installation.html

[Template-HTML]:https://img.shields.io/badge/FestavaLive-FFBD33?style=for-the-badge&logo=laravel&logoColor=black
[Template-HTML-url]:https://themewagon.github.io/FestavaLive/

[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
