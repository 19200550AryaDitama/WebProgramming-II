<html> 
    <head> 
        <title>Form Pembelian Sepatu</title> </head> 
    <body> 
    <center> 
        <form action="<?= base_url('jualbelisepatu/cetak'); ?>" method="post"> 
            <table> 
                <tr> <th colspan="3"> Form Input Data Tokosepatu </th> </tr>
                
                <tr> <td colspan="3"> <hr> </td> </tr> 
                <tr> 
                <tr> <th>Nama Pembeli</th> <th>:</th> 
                    <td> <input type="text" name="nama" id="nama"> </td> 
                </tr> 
                <tr> <th>No hp</th> <td>:</td> 
                    <td> <input type="text" name="no" id="no"> </td> 
                </tr>         
                    <tr> <th>Merk</th> <td>:</td> 
                    <td> <select name="merk" id="merk"> 
                            <option value="">Merk sepatu</option> 
                            <option value="375000">Nike</option> 
                            <option value="300000">Adidas</option> 
                            <option value="250000">Kickers</option>
                            <option value="275000">Eiger</option> 
                            <option value="400000">Bucherri</option>
                        </select> </td> </tr> 
                   <tr> 
                   <tr> <th>Ukuran</th> <td>:</td> 
                    <td> <select name="ukuran" id="ukuran"> 
                            <option value="">Ukuran sepatu</option> 
                            <option value="32">32</option> 
                            <option value="33">33</option> 
                            <option value="34">34</option>
                            <option value="35">35</option> 
                            <option value="36">36</option>
                            <option value="37">37</option> 
                            <option value="38">38</option> 
                            <option value="39">39</option>
                            <option value="40">40</option> 
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option> 
                            <option value="44">44</option>
                        </select> </td> </tr> 
                   <tr> 
                       <td colspan="3" align="center"> 
                           <input type="submit" value="Submit"> </td> 
                   </tr> 
            </table> 
        </form> 
    </center> 
</body> 
</html>