<section align="left">             
	<h1>
		Form Input Data Diri		
	</h1>             		         
		<form action="<?= base_url('DLemas/Result' ); ?>" method="post">             
			<table>                                 
				  <tr>                      
					<hr>                                  
                  </tr>                 
                  <tr>                     
            	     <th>Nama Siswa</th>                     
            	     <th>:</th>                     
            	     <td>                         
            		    <input type="text" name="nama" id="nama" size="22">                     
            	     </td>                 
                  </tr>                 
                  <tr>                     
            	     <th>NIK Siswa</th>                     
            	     <td>:</td>                     
            	     <td>                         
            		    <input type="text" name="nik" id="nik" size="22">                     
            	     </td>                 
                  </tr>
                  <tr>                     
            	     <th>Kelas</th>                     
            	     <td>:</td>                     
            	     <td>                         
            		    <select name="kelas" id="kelas">                             
            			<option value="">Pilih</option>                             
            			<option value="Multimedia">Multimedia</option>                             
            			<option value="Teknik Komputer">Teknik Komputer</option>                             
            			<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            			<option value="Ilmu Komputer">Ilmu Komputer</option>                               
            		    </select>                    
            	     </td>                 
                  </tr>
                  <tr>                     
            	     <th>Tempat Lahir</th>                     
            	     <td>:</td>                     
            	     <td>                         
            		    <input type="text" name="tempatlahir" id="tempatlahir" size="22">                     
            	     </td>                 
                  </tr>
                  <tr>                     
            	     <th>Tanggal Lahir</th>                     
            	     <td>:</td>                     
            	     <td>                         
            		    <input type="text" name="Tanggal" id="Tanggal" size="22">                     
            	     </td>                 
                  </tr>
                  <tr>                     
            	     <th>Alamat Rumah</th>                     
            	     <td>:</td>                     
            	     <td>                         
            		    <textarea cols="23" rows="5" name="alamat" id="alamat"></textarea>                     
            	     </td>                 
                  </tr>
                  <tr>                     
            	     <th>Jenis Kelamin</th>                     
            	     <td>:</td>                     
            	     <td>    

            		    <input type="Radio" name="jeniskelamin" value="laki-laki" id="jeniskelamin"> Laki-Laki
            		    <input type="Radio" name="jeniskelamin" value="perempuan" id="jeniskelamin"> Perempuan
                           
            	     </td>                 
                  </tr>
                  <tr>                     
            	     <th>Agama</th>                     
            	     <td>:</td>                     
            	     <td>                         
            		    <select name="agama" id="agama">                             
            			<option value="">Pilih</option>                             
            			<option value="Islam">Islam</option>                             
            			<option value="Kristen">Kristen</option>                             
            			<option value="Katolik">Katolik</option>
            			<option value="Budha">Budha</option>                           
            			<option value="Hindu">Hindu</option>
            			<option value="Protestan">Protestan</option>
            			<option value="Konghuchu">Konghuchu</option>     
            		    </select>                      
            	     </td>                 
                  </tr>       
            </table>
            <hr>
            <br>
            <input type="submit" value="Masukan Data" > Input Data Siswa   
        </form>
</section>	