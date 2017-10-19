<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
// Route::get('/', function () {
//     return view('welcome');
// });

// PAGINA DO MEU BLOG
Route::get('/meublog', function() {
  echo "<h1 style='width:90%; margin:20px auto; color:white; font-size:80pt; background-color:black;>'<br/>Bem vindo ao MeuBlog</h1>";
});

// PAGINA DE ADMINISTRAÇÃO
Route::get('/admin', function() {
  echo "<h1 style='width:90%; margin:20px auto; color:white; font-size:80pt; background-color:#cecece;>'<br/>Gerencia - Site</h1>";
});

// LISTANDO UM CONJUNTO DE NOMES EM TABELA
Route::get('/usuarios/{usuario1}/{usuario2}/{usuario3}/{usuario4}', function ($usuario1,$usuario2,$usuario3,$usuario4) {
  echo "<table style='background-color:#cecece; border:1px solid black; '>
          <tr>
              <th> NOMES DE USUARIO </th>
          </tr>
          <tr>
              <td>{$usuario1}</td>
              <td>{$usuario2}</td>
              <td>{$usuario3}</td>
              <td>{$usuario4}</td>
          </tr>
        </table>";
});

// CALCULANDO A MEDIA
Route::get('/media/{m1}/{m2}/{m3}/{m4}/{m5}', function ($m1,$m2,$m3,$m4,$m5) {
  $tmedia = (($m1+$m2+$m3+$m4+$m5)/5);
  echo "<h1 style='width:90%; margin:20px auto; color:white; font-size:80pt; background-color:black;>'<br />Calculando Média:<br />
  Media:{$tmedia}";
});

// COMPARANDO NOMES IGUAIS
Route::get('/nomes/{nome1}/{nome2}', function ($nome1,$nome2) {
  if ($nome1 == $nome2) {
    echo "<h1 style='width:90%; margin:20px auto; color:white; font-size:80pt; background-color:black;>'<br />SEUS NOMES SÃO IGUAL <br /> Primeiro Nome :{$nome1}<br /> Segundo Nome:{$nome2}</h1>";
  } else {
    echo "<h1 style='width:90%; margin:20px auto; color:white; font-size:80pt; background-color:black;>'<br />NÃO EXISTE NOMES IGUAIS</h1>";
  }
});
