// Untuk komfirmasi delete data
function hapusData(id, identifier){
	console.log(id);
    if (confirm("Apakah anda yakin akan menghapus data ini?")){
    	switch(identifier) {
		  case 1:
		    window.location.href = 'book/book_delete.php?id=' + id;
		    break;			  		 
		}	          
    }
}