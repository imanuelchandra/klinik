<script type="text/javascript">//<![CDATA[
    $(document).ready(function(){
        $('#jnspenyakit').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit) //we're calling the response json array 'cities'
                {
                    $.each(penyakit, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        /**
          $('#jnspenyakit').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit) //we're calling the response json array 'cities'
                {
                    $.each(penyakit, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        **/
    });
    // ]]>
</script>