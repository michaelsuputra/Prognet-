function validateForm() {
    var nama = document.getElementById("nama").value;
    var nim = document.getElementById("nim").value;
    var alamat = document.getElementById("alamat").value;
    var jenis_kelamin_laki = document.getElementById("jenis_laki").checked;
    var jenis_kelamin_perempuan = 
   document.getElementById("jenis_perempuan").checked;
    var jurusan = document.getElementById("jurusan").value;
    var email = document.getElementById("email").value;
    var namaRegex = /^[a-zA-Z\s]+$/;
    if (!nama.match(namaRegex)) {
    alert("Nama hanya boleh berisi huruf dan spasi.");
   return false;
    }
    if (nim.length !== 10 || isNaN(nim)) {
    alert("NIM harus terdiri dari 10 digit angka.");
    return false;
    }
    if (alamat.trim() === "") {
    alert("Alamat harus diisi.");
   return false;
    }
    if (!jenis_kelamin_laki && !jenis_kelamin_perempuan) {
    alert("Pilih jenis kelamin.");
   return false;
    }
    if (jurusan === "Pilih Jurusan") {
    alert("Pilih jurusan.");
    return false;
    }
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email.match(emailRegex)) {
    alert("Masukkan alamat email yang valid.");
    return false;
    }
    alert("Data anda berhasil disimpan.");
    return true;
    }