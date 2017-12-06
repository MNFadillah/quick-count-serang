<?php
require APPPATH . '/libraries/REST_Controller.php';

class Api extends REST_Controller {
    function __construct()
    {
        parent::__construct();
    }

    public function members_get($param = ''){
        if((int)$param > 0){
            $this->db->select('id, name, password, telp, alamat, created_at, updated_at, session');
            $data = $this->member_m->get($param);
            if(isset($data)){
                $this->response($data, 200);
            }else{
                $this->response(["status" => false, "message" => "Member yang anda cari tidak ada", "member" => null], 200);
            }
        }
    }

    public function members_post($param = '')
    {
        $data = $this->post();

        if($param == "new"){
            $fullname = $data['name'];
            $password = md5($data['password']);
            $no_hp = $data['telp'];
            $session = $this->generateRandomString(32);

            if($fullname != null && $password != null && $no_hp != null){
            	$data = $this->member_m->insert(array('name' => $fullname,'password' => $password, 'telp' => $no_hp, 'session' => $session));
                        if($data > 0){
                            $member = $this->member_m->get($data);
                            $this->response(["status" => true, "message" => "Pendaftaran anda telah berhasil, silahkan tunggu ...", "member" => $member], 200);
                        } else {
                            $this->response(["status" => false, "message" => "Pendaftaran gagal, silahkan hubungi admin.", "member" => null], 200);
                        }
            } else {
            	$this->response(["message" => "Silahkan isi form registrasi dengan benar!", "status" => false, "member" => null], 200);
            }
        } else if($param == "login"){
            $telp = $data['telp'];
            $password = $data['password'];

            if($telp != null & $password != null){
                $user_login = $this->member_m->get_by(array('telp' => $telp, 'password' => md5($password)));
                if($user_login != null && $user_login){
                        $session_text = $this->generateRandomString(32);
                        $this->member_m->update($user_login->id, array('session' => $session_text));
                        $user_login->session = $session_text;
                        $this->response(["message" => "Login berhasil! Silahkan tunggu ...", "status" => true, "member" => $user_login], 200);
                } else {
                    $this->response(["message" => "Email atau Password anda salah!", "status" => false, "member" => null], 200);
                }
            }
        }
    }

    public function desa_get($param = ''){
        if($param == 'all'){
            $data = $this->desa_m->get_all();
            $this->response($data, 200);
        } else if(is_int((int)$param)){
            $data = $this->desa_m->get_many_by('id_kecamatan', $param);
            $this->response($data, 200);
        }
    }

    public function desa_post($value='')
    {
        
    }

    public function kecamatan_get($param='')
    {
        if($param == 'all'){
            $data = $this->kecamatan_m->get_all();
            $this->response($data, 200);
        } else if(is_int((int)$param)){
            $data = $this->kecamatan_m->get_by('id_kecamatan', $param);
            $this->response($data, 200);
        }  
    }

    public function kecamatan_post($value='')
    {
        # code...
    }

    public function tps_get($param='')
    {
        if($param == 'all'){
            $data = $this->tps_m->get_all();
            $this->replaceTpsById($data);
            $this->response($data, 200);
        } else if(is_int((int)$param)){
            $data = $this->tps_m->get_many_by('id_desa', $param);
            $this->replaceTpsById($data);
            $this->response($data, 200);
        }
    }

    public function tps_post($value='')
    {
        # code...
    }

    public function panitia_get($param='')
    {
        if($param == 'all'){
            $data = $this->panitia_m->get_all();
            $this->replacePanitiaById($data);
            $this->response($data, 200);
        } else if(is_int((int)$param)){
            $data = $this->panitia_m->get_many_by('id_tps', $param);
            $this->replacePanitiaById($data);
            $this->response($data, 200);
        }
    }

    public function panitia_post($value='')
    {
        # code...
    }

    public function cades_get($param='')
    {
        if($param == 'all'){
            $data = $this->cades_m->get_all();
            $this->replaceCadesById($data);
            $this->response($data, 200);
        } else if(is_int((int)$param)){
            $data = $this->cades_m->get_many_by('id_desa', $param);
            $this->replaceCadesById($data);
            $this->response($data, 200);
        }
    }

    public function cades_post($value='')
    {
        # code...
    }

    public function qc_get($value='')
    {
        # code...
    }

    public function qc_post($param='')
    {
        $id_tps = $this->post('id_tps');
        $id_member = $this->post('id_member');
        $id_cades = $this->post('id_cades');
        $suara = $this->post('suara');

        $this->response(["message" => "Batas Pengisian Suara Sudah Berakhir!", "status" => false], 200);
        // $qcData = $this->count_m->get_by(array('id_cades'=> $id_cades, 'id_tps'=>$id_tps));
        // if($qcData == null || $qcData == ''){
        //     if($id_member != null && $id_cades != null && $suara != null){
        //         $insert_id = $this->count_m->insert(array('id_tps' => $id_tps, 'id_member' => $id_member, 'id_cades' => $id_cades, 'suara' => $suara));

        //             if($insert_id > 0){
                        
        //                 $this->response(["message" => "Data telah diupdate, Terima kasih!", "status" => true], 200);
        //             } else {
        //                 $this->response(["message" => "Terjadi kesalahan saat mengupdate suara, silahkan coba lagi nanti!", "status" => false], 200);
        //             }
        //     } else {
        //         $this->response(["message" => "Terjadi kesalahan saat mengupdate suara, silahkan coba lagi nanti!", "status" => false], 200);
        //     }
        // }else{

        //     if($id_member != null && $id_cades != null && $suara != null){
        //         $update_id = $this->count_m->update_by(array('id_tps'=>$id_tps, 'id_cades'=>$id_cades), array('id_member' => $id_member, 'suara' => $suara));

        //             if($update_id > 0){
        //                 $this->response(["message" => "Data telah diupdate, Terima kasih!", "status" => true], 200);
        //             } else {
        //                 $this->response(["message" => "Terjadi kesalahan saat mengupdate suara, silahkan coba lagi nanti!", "status" => false], 200);
        //             }
        //     } else {
        //         $this->response(["message" => "Terjadi kesalahan saat mengupdate suara, silahkan coba lagi nanti!", "status" => false], 200);
        //     }
        // }
    }

    public function places_get($param = ''){
        if($param == 'all'){
            $data = $this->place_m->get_all();
            $this->replacePlaceIdByText($data);
            $this->response($data, 200);
        } else if(is_int((int)$param)){
            $data = $this->place_m->get_many_by('id_category', $param);
            $this->replacePlaceIdByText($data);
            $this->response($data, 200);
        }
    }

    public function place_post($param = ''){
        if($param == 'add'){
            $cat = $this->post('cat');
            $name = $this->post('name');
            $intro = $this->post('intro');
            $desc = $this->post('desc');
            $latitude = $this->post('latitude');
            $longitude = $this->post('longitude');
            $address = $this->post('address');
            $telp = $this->post('telp');
            $email = $this->post('email');
            $link = $this->post('link');

            if($cat != null && $name != null && $intro != null && $desc != null && $latitude != null && $longitude != null && $address != null && $telp != null && $email != null && $link != null){
                $config['upload_path']          = './assets/uploads/images/';
                $config['allowed_types']        = '*';
                $config['max_width']            = 4000;
                $config['max_height']           = 4000;
                $config['remove_spaces']        = true;
                $config['encrypt_name']         = true;
                
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                    $error = array('error' => $this->upload->display_errors());

                    $this->response(["message" => $this->upload->display_errors(), "status" => false], 200);
                } else{
                    $data = $this->upload->data();

                    $insert_id = $this->place_m->insert(array('id_category' => $this->cat_m->get_by('name', $cat)->id, 'name' => $name, 'intro' => $intro, 'description' => $desc, 'image' => $this->upload->data('file_name'), 'latitude' => $latitude, 'longitude' => $longitude, 'address' => $address, 'phone' => $telp, 'email' => $email, 'link' => $link, 'status' => 'N'));

                    if($insert_id > 0){
                        $this->load->library('Image_moo');
                        $file_uploaded = './assets/uploads/images/'.$this->upload->data('file_name');
                        $this->image_moo->load($file_uploaded)->resize(800,680)->save($file_uploaded,true);
                        
                        $this->response(["message" => "Tempat sudah kami tambahkan dan menunggu persetujuan Admin, Terima kasih!", "status" => true], 200);
                    } else {
                        $this->response(["message" => "Terjadi kesalahan saat mengupload tempat, silahkan coba lagi nanti!", "status" => false], 200);
                    }
                }
            } else {
                $this->response(["message" => "Mohon isi form dengan lengkap.", "status" => false], 200);
            }
        }
    }

    public function cctv_get($param = ''){
        if($param == 'all'){
            $this->response($this->cctv_m->get_all(), 200);
        }
    }

    public function report_get($param1 = '', $param2 = '', $param3 = NULL){
        if($param1 == 'all'){
            $data = $this->report_m->_order_desc()->get_all();
            $this->replaceReportIdByText($data);
            $this->response($data, 200);
        } else if($param1 == 'status'){
            if($param2 == 'private'){
                if($param3 != NULL){
                    $data = $this->report_m->_order_desc()->get_many_by(array('status' => $param2, 'id_user' => $param3));
                } else {
                    $data = array('message' => 'Action salah.', 'status' => false);
                }
            } else {
                $data = $this->report_m->_order_desc()->get_many_by('status', $param2);
            }
            $this->replaceReportIdByText($data);
            $this->response($data, 200);
        } else if($param1 == 'id'){
            $data = $this->report_m->get($param2);
            $this->replaceReportItem($data);
            $this->response($data, 200);
        }
    }

    public function report_post($param = ''){
        if($param == 'submit'){
            $nama = $this->post('name');
            $desc = $this->post('desc');
            $loc = $this->post('loc');
            $id_user = $this->post('id_user');


            $config['upload_path']          = './assets/uploads/images/';
            $config['allowed_types']        = '*';
            $config['max_width']            = 4000;
            $config['max_height']           = 4000;
            $config['remove_spaces']        = true;
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('file'))
            {
                $error = array('error' => $this->upload->display_errors());

                $this->response(["message" => $this->upload->display_errors(), "status" => false], 200);
            } else{
                $data = $this->upload->data();

                $insert_id = $this->report_m->insert(array('title' => $nama, 'content' => $desc, 'location' => $loc, 'id_user' => $id_user, 'image' => $this->upload->data('file_name')));

                if($insert_id > 0){
                    $this->load->library('Image_moo');
                    $file_uploaded = './assets/uploads/images/'.$this->upload->data('file_name');
                    $this->image_moo->load($file_uploaded)->resize(800,680)->save($file_uploaded,true);
                	
                    $insert_id = $this->message_m->insert(array("title" => "Laporan anda sudah kami terima", "content" => "Petugas sedang memeriksa laporan anda. Bersama Menjaga Kamtibmas, KEDIRI MENANG. #panjalujayati #bestofservice", "sender" => "Siskamling GO", "id_user" => $id_user));
                    $this->response(["message" => "Laporan anda berhasil kami terima, terimakasih atas partisipasi anda!", "status" => true], 200);
                } else {
                    $this->response(["message" => "Terjadi kesalahan saat mengupload laporan, silahkan coba lagi nanti!", "status" => false], 200);
                }
            }
        }
    }

    public function qresponse_get($param = ''){
        if($param == 'all'){
            $data = $this->qr_m->_order_desc()->get_all();
            $this->replaceQrIdByText($data);
            $this->response($data, 200);
        } else if((int)$param > 0){

        } else {
            echo 'invalid';
        }
    }

    public function qresponse_post($param = ''){
        $data = $this->post();
        if($param = 'add'){
            if($data != null){
                $id_user = $data['id_user'];
                $latitude = $data['latitude'];
                $longitude = $data['longitude'];
                $tipe = $data['tipe'];

                $insert_id = $this->qr_m->insert(array('id_user' => $id_user, 'latitude' => $latitude, 'longitude' => $longitude, 'tipe' => $tipe));
                if($insert_id > 0){
                    $this->warnPoliceMember();
                    $this->response(["message" => "Laporan anda sudah kami terima! Amankan diri anda bantuan akan segera datang.", "status" => true], 200);
                }  else {
                    $this->response(["message" => "Laporan anda gagal diterima, segera amankan diri anda di tempat keramaian terdekat!", "status" => true], 200);
                }
            } else {
                $this->response(["message" => "Laporan anda gagal diterima, segera amankan diri anda di tempat keramaian terdekat!", "status" => true], 200);
            }
        }
    }

    public function messages_get($param = ''){
        if($param == 'all'){
            $this->response($this->message_m->_order_desc()->get_all(), 200);
        } else if((int)$param > 0){
            $this->response($this->message_m->_order_desc()->get_many_by('id_user', $param), 200);
        } else {
            echo 'invalid';
        }
    }

    public function log_post($param = ''){
        if($param == 'add'){
            $data = $this->post();
            $event = $data['event'];
            $id_user = $data['id_user'];

            $insert_id = $this->log_m->insert(array('event' => $event, 'id_user' => $id_user));
            if($insert_id > 0){
                $this->response(["message" => "Log done!", "status" => true], 200);
            } else {
                $this->response(["message" => "Log error!", "status" => false], 200);
            }
        } else {
            echo 'invalid';
        }
    }

    public function log_get($param = ''){
        if($param == 'all'){
            $this->response($this->log_m->_order_desc()->get_all(), 200);
        } else if((int)$param > 0){
            $this->response($this->log_m->_order_desc()->get_many_by('id_user', $param), 200);
        } else {
            echo 'invalid';
        }
    }

    public function simkeling_post($param = ''){
        if($param == 'update_posisi'){
            $latitude = $this->post('latitude');
            $longitude = $this->post('longitude');
            $id_user = $this->post('id_user');

            if($latitude != null && $longitude != null && $id_user != null){
                $user = $this->simkel_m->get_by('id_user', $id_user);
                if($user == null){
                    //create
                    $insert_id = $this->simkel_m->insert(array('id_user' => $id_user, 'latitude' => $latitude, 'longitude' => $longitude));
                    if($insert_id > 0){
                        $this->sendNotificationAll($this->member_m->get($id_user)->tipe . " telah beroperasi", "Silahkan cek di menu samsat & sim keliling untuk mengetahui lokasi.");
                        $this->response(["message" => "Location updated", "status" => true], 200);
                    } else {
                        $this->response(["message" => "Location not updated 1", "status" => true], 200);
                    }
                } else {
                    //update
                    $update_id = $this->simkel_m->update($user->id, array('latitude' => $latitude, 'longitude' => $longitude));
                    if($update_id) {
                        $this->response(["message" => "Location updated", "status" => true], 200);
                    } else {
                        $this->response(["message" => "Location not updated 2", "status" => true], 200);
                    }
                }
            }
        } else if($param == 'delete_posisi'){
            $id_user = $this->post('id_user');

            if($id_user != null){
                $delete_id = $this->simkel_m->delete($this->simkel_m->get_by('id_user', $id_user)->id);
                if($delete_id){
                	$this->sendNotificationAll(ucfirst($this->member_m->get($id_user)->tipe) . " berhenti beroperasi", "Terimakasih.");
                    $this->response(["message" => "Lokasi telah dihapus", "status" => false], 200);
                } else {
                    $this->response(["message" => "Terjadi kesalahan saat menghapus lokasi", "status" => false], 200);
                }
            } else {
                $this->response(["message" => "Terjadi kesalahan saat menghapus lokasi", "status" => false], 200);
            }
        }
    }

    public function simkeling_get($param = ''){
        if($param == 'all'){
            $simkel = $this->simkel_m->get_all();
            foreach ($simkel as $key => $value) {
                $member = $this->member_m->get($value->id_user);
                $value->tipe = $member->tipe;
            }
            $this->response($simkel, 200);
        }
    }

    public function layanan_post($param = ''){
        if($param == 'penyuluhan'){
            $instansi = $this->post('instansi');
            $pjawab = $this->post('pjawab');
            $email = $this->post('email');
            $telp = $this->post('telp');
            $alamat = $this->post('alamat');
            $maksud = $this->post('maksud');
            $tgl = $this->post('tgl');
            $jam = $this->post('jam');
            $tempat = $this->post('tempat');
            $audiens = $this->post('audiens');
            $materi = $this->post('materi');
            $catatan = $this->post('catatan');
            $id_user = $this->post('id_user');

            if($this->post() != null){
                $insert_id = $this->service_m->insert(array('pjawab' => $pjawab, 'nama' => $instansi, 'email' => $email, 'telp' => $telp, 'alamat' => $alamat, 'tujuan' => $maksud, 'tanggal' => $tgl, 'waktu' => $jam, 'tempat' => $tempat, 'audiens' => $audiens, 'kode_book' => "", 'id_users' => $id_user, 'materi' => $materi, 'catatan' => $catatan, 'type' => 'penyuluhan'));

                if($insert_id > 0){
                    $update_id = $this->service_m->update($insert_id, array('kode_book' => $this->generateKodeBook("LYN", $insert_id)));
                    if($update_id){
                        $this->response(["status" => true, "message" => "Form sudah kami terima, silahkan datang dengan membawa kodebook yang tersedia"], 200);
                    } else {
                        $this->response(["status" => false, "message" => "Form sudah kami terima, namun kami tidak dapat membuat kode book untuk anda. Silahkan hubungi admin!"], 200);
                    }
                } else {
                    $this->response(["status" => false, "message" => "Terjadi kesalahan saat membuat form penyuluhan. Silahkan coba lagi..."], 20);
                }
            } else {
                $this->response(["status" => false, "message" => "Harap isi form dengan benar!"],200);
            }
        } else if($param == 'pembinaan'){
            $instansi = $this->post('instansi');
            $pjawab = $this->post('pjawab');
            $email = $this->post('email');
            $telp = $this->post('telp');
            $alamat = $this->post('alamat');
            $maksud = $this->post('maksud');
            $tgl = $this->post('tgl');
            $jam = $this->post('jam');
            $tempat = $this->post('tempat');
            $audiens = $this->post('audiens');
            $materi = $this->post('materi');
            $catatan = $this->post('catatan');

            if($this->post() != null){
                $insert_id = $this->service_m->insert(array('pjawab' => $pjawab, 'nama' => $instansi, 'email' => $email, 'telp' => $telp, 'alamat' => $alamat, 'tujuan' => $maksud, 'tanggal' => $tgl, 'waktu' => $jam, 'tempat' => $tempat, 'audiens' => $audiens, 'kode_book' => "", 'id_users' => $id_user, 'materi' => $materi, 'catatan' => $catatan, 'type' => 'pembinaan'));

                if($insert_id > 0){
                    $update_id = $this->service_m->update($insert_id, array('kode_book' => $this->generateKodeBook("PBN", $insert_id)));
                    if($update_id){
                        $this->response(["status" => true, "message" => "Form sudah kami terima, silahkan datang dengan membawa kodebook yang tersedia"], 200);
                    } else {
                        $this->response(["status" => false, "message" => "Form sudah kami terima, namun kami tidak dapat membuat kode book untuk anda. Silahkan hubungi admin!"], 200);
                    }
                } else {
                    $this->response(["status" => false, "message" => "Terjadi kesalahan saat membuat form penyuluhan. Silahkan coba lagi..."], 20);
                }
            } else {
                $this->response(["status" => false, "message" => "Harap isi form dengan benar!"],200);
            }
        } else if($param == 'sim'){ 
            //[{kota_darurat=shjeiw, tipe_sim=SIM C, desa_darurat=jsian, pekerjaan=Pelajar / Mahasiswa, alamat=wonosari, no_sim=4221543646767, nama_belakang=zeta, tinggi=180, tmpktp=surabaya, kodepos=6829, tgl_lahir=1997-05-21, jk=Laki - Laki, wn=WNI, ibu=yayuk, ayah=yudhi, desa=wonokusumo, kota=surabaya, telp=3164687679, cacat=Tidak ada, noktp=16378281818, telp_darurat=1628929, nama_depan=rama, kacamata=Tidak, alamat_darurat=wondi, sertifikat=Tidak ada, tmp_lahir=surabaya, kodepos_darurat=14045, jenis_permohonan=Perpanjangan, pendidikan=SMA/Sederajat, email_darurat=a@a.com}]
            $kota_darurat = $this->post('kota_darurat');
            $desa_darurat = $this->post('desa_darurat');
            $pekerjaan = $this->post('pekerjaan');
            $tipe_sim = $this->post('tipe_sim');
            $alamat = $this->post('alamat');
            $no_sim = $this->post('no_sim');
            $nama_depan = $this->post('nama_depan');
            $tinggi = $this->post('tinggi');
            $tmpktp = $this->post('tmpktp');
            $kodepos = $this->post('kodepos');
            $tgl_lahir = $this->post('tgl_lahir');
            $wn = $this->post('wn');
            $jk = $this->post('jk');
            $ibu = $this->post('ibu');
            $ayah = $this->post('ayah');
            $desa = $this->post('desa');
            $telp = $this->post('telp');
            $cacat = $this->post('cacat');
            $noktp = $this->post('noktp');
            $telp_darurat = $this->post('telp_darurat');
            $kacamata = $this->post('kacamata');
            $alamat_darurat = $this->post('alamat_darurat');
            $sertifikat = $this->post('sertifikat');
            $tmp_lahir = $this->post('tmp_lahir');
            $kodepos_darurat = $this->post('kodepos_darurat');
            $jenis_permohonan = $this->post('jenis_permohonan');
            $pendidikan = $this->post('pendidikan');
            $email = $this->post('email');
            $negara_asal = $this->post('negara_asal');
            $no_paspor = $this->post('no_paspor');
            $tgl_out = $this->post('tgl_out');
            $no_kims = $this->post('no_kims');
            $tgl_kims = $this->post('tgl_kims');
            $nama_belakang = $this->post('nama_belakang');
            $kota = $this->post('kota');
            $id_user = $this->post('id_user');

            if($this->post() != null){
                $insert_id = $this->sim_model->insert(array('jpermohonan' => $jenis_permohonan, 'gol_sim' => $tipe_sim, 'firstname' => $nama_depan, 'lastname' => $nama_belakang, 'jkelamin' => $jk, 'kewarganegaraan' => $wn, 'negara_asal' => $negara_asal, 'no_passport' => $no_paspor, 'tgl_passport' => $tgl_out, 'no_dokimigrasi' => $no_kims, 'tgl_dokimigrasi' => $tgl_kims, 'pekerjaan' => $pekerjaan, 'alamat_jln' => $alamat, 'alamat_rt' => $desa, 'alamat_kota' => $kota, 'alamat_kdpos' => $kodepos, 'alamat_telpon' => $telp, 'or_ayah' => $ayah, 'or_ibu' => $ibu, 'ktp' => $noktp, 'dikeluarkan' => $tmpktp, 'pendidikan' => $pendidikan, 'kacamata' => $kacamata, 'cacat' => $cacat, 'sertifikat' => $sertifikat, 'no_sim_lama' => $no_sim, 'dar_alamat_jln' => $alamat_darurat, 'dar_alamat_rt' => $desa_darurat, 'dar_alamat_kdpos' => $kodepos_darurat, 'dar_alamat_telpon' => $telp_darurat, 'id_user' => $id_user));

                if($insert_id > 0){
                    $update_id = $this->sim_model->update($insert_id, array('kode_book' => $this->generateKodeBook("SIM", $insert_id)));
                    if($update_id){
                        $this->response(["message" => "Form sudah kami terima, silahkan datang dengan membawa no qrcode anda.", "status" => true], 200);
                    } else {
                        $this->response(["status" => false, "message" => "Form sudah kami terima, namun kami tidak dapat membuat kode book untuk anda. Silahkan hubungi admin!"], 200);
                    }
                    
                } else {
                    $this->response(["message" => "Terdapat kesalahan saat menyimpan form, silahkan hubungi admin untuk bantuan lebih lanjut!", "status" => false], 200);
                }
            } else {
                $this->response(["message" => "Mohon isi form dengan benar", "status" => false], 200);
            }
        } else if($param == "skck"){
            $nama = $this->post('nama_skck');
            $ttl = $this->post('ttl_skck');
            $agama = $this->post('agama_skck');
            $kebangsaan = $this->post('kebangsaan_skck'); 
            $gender = $this->post('jk_skck'); // 
            $status = $this->post('status_skck'); // 
            $pekerjaan = $this->post('pekerjaan_skck'); // 
            $alamat = $this->post('alamat_skck'); // 
            $noktp = $this->post('noktp_skck'); // 
            $nopaspor = $this->post('nopaspor_skck'); // 
            $nokitas = $this->post('nokitas_skck'); // 
            $notelp = $this->post('notelp_skck'); // 
            $nama_bapak = $this->post('nama_bapak'); // 
            $umur_bapak = $this->post('umur_bapak'); // 
            $agama_bapak = $this->post('agama_bapak'); // 
            $kebangsaan_bapak = $this->post('kebangsaan_bapak'); // 
            $pekerjaan_bapak = $this->post('pekerjaan_bapak'); // 
            $alamat_bapak = $this->post('alamat_bapak'); // 
            $nama_istri = $this->post('nama_istri'); 
            $umur_istri = $this->post('umur_istri'); // 
            $agama_istri = $this->post('agama_istri'); // 
            $kebangsaan_istri = $this->post('kebangsaan_istri'); // 
            $pekerjaan_istri = $this->post('pekerjaan_istri'); // 
            $alamat_istri = $this->post('alamat_istri'); // 
            $nama_ibu = $this->post('nama_ibu'); // '
            $umur_ibu = $this->post('umur_ibu'); // 
            $agama_ibu = $this->post('agama_ibu'); // 
            $kebangsaan_ibu = $this->post('kebangsaan_ibu'); // '
            $pekerjaan_ibu = $this->post('pekerjaan_ibu'); // 
            $alamat_ibu = $this->post('alamat_ibu'); // 
            $saudara1 = $this->post('saudara1');
            $saudara2 = $this->post('saudara2');
            $saudara3 = $this->post('saudara3');
            $saudara4 = $this->post('saudara4');
            $berperkara = $this->post('berperkara'); // 
            $perkara_apa = $this->post('perkara_apa'); // 
            $putusan_perkara = $this->post('putusan_perkara'); // 
            $proses_perkara = $this->post('proses_perkara'); // '
            $progres_perkara = $this->post('progress_perkara'); // 
            $pelanggaran = $this->post('pelanggaran'); // 
            $pelanggaran_apa = $this->post('pelanggaran_apa'); // 
            $proses_pelanggaran = $this->post('proses_pelanggaran'); // 
            $riwayat_negara = $this->post('riwayat_negara'); // 
            $hobi = $this->post('hobi'); // 
            $telp_lain = $this->post('telp_lain'); // 
            $sponsor = $this->post('sponsor'); // 
            $alamat_sponsor = $this->post('alamat_sponsor');
            $telp_sponsor = $this->post('telp_sponsor'); // 
            $jenis_usaha = $this->post('jenis_usaha');
            if($this->post() != null){
                $insert_id = $this->skck_m->insert(array('nama'=>$nama, 'tanggal_lahir'=> $ttl, 'agama'=>$agama, 'kebangsaan'=>$kebangsaan, 'jenis_kelamin' => $gender, 'kawin' => $status, 'pekerjaan'=>$pekerjaan, 'alamat_sekarang' => $alamat, 'no_kitas' => $nokitas, 'nama_bapak' => $nama_bapak, 'umur_bapak' => $umur_bapak, 'agama_bapak' => $agama_bapak, 'kebangsaan_bapak' => $kebangsaan_bapak, 'pekerjaan_bapak' => $pekerjaan_bapak, 'alamat_bapak' => $alamat_bapak, 'nama_keluarga' => $nama_istri, 'umur_keluarga' => $umur_istri, 'agama_keluarga' => $agama_istri, 'kebangsaan_keluarga' => $kebangsaan_istri, 'pekerjaan_keluarga' => $pekerjaan_istri, 'alamat_keluarga' => $alamat_istri, 'nama_ibu' => $nama_ibu, 'umur_ibu' => $umur_ibu, 'agama_ibu' => $agama_ibu, 'kebangsaan_ibu' => $kebangsaan_ibu, 'pekerjaan_ibu' => $pekerjaan_ibu, 'alamat_ibu' => $alamat_ibu, 'pernah_pidana' => $berperkara, 'perkara_pidana' => $perkara_apa, 'vonis_pidana' => $putusan_perkara, 'kasus_pidana' => $proses_perkara, 'proses_pidana' => $progres_perkara, 'pernah_pelanggaran' => $pelanggaran, 'jenis_pelanggaran' => $pelanggaran_apa, 'proses_pelanggaran' => $proses_pelanggaran, 'riwayat_pekerjaan' => $riwayat_negara, 'hobi' => $hobi, 'telpon_lain' => $telp_lain, 'sponsor' => $sponsor, 'alamat_sponsor' => $alamat_sponsor, 'telp_sponsor' => $telp_sponsor, 'jenis_usaha' => $jenis_usaha, 'saudara1' => $saudara1, 'saudara2' => $saudara2, 'saudara3' => $saudara3, 'saudara4' => $saudara4));
                if($insert_id){
                    $this->response(["message" => "Form sudah kami terima", "status" => true], 200);
                }else{
                    $this->response(["message" => "Terdapat kesalahan saat menyimpan form, silahkan hubungi admin untuk bantuan lebih lanjut!", "status" => false], 200);
                }
            }else{
                $this->response(["status" => false, "message" => "Harap isi form dengan benar!"],200);
            }
        }
    }

    public function leaderboard_get(){
    	$data_leaderboard = $this->member_m->_order_desc("point")->limit(10)->get_all();
    	$data_array = array();
    	foreach ($data_leaderboard as $key => $value) {
    		$data_array[$key] = array('member_id' => $value->id, 'member_name' => $value->name, 'member_image' => assets_url() . "uploads/images/" .$value->image, 'created_at' => $value->created_at, 'tipe' => ucfirst($value->tipe), 'point' => $value->point, 'no_telp' => $notelp);
    	}

    	$this->response($data_array, 200);
    }

    private function replacePlaceIdByText($data = array()){
        foreach ($data as $key => $item) {
            $item->id_category = $this->cat_m->get($item->id_category);
            $item->image = assets_url() . "uploads/images/" . $item->image;
            $item->phone = (string)$item->phone;
        }
    }

    public function tanggapan_post($param = ''){
    	if($param == 'add'){
    		$user_id = $this->post('id_user');
    		$report_id = $this->post('id_report');
    		$tanggapan = $this->post('tanggapan');

    		if($user_id != null && $report_id != null && $tanggapan != null){
    			$insert_id = $this->tanggapan_m->insert(array('id_report' => $report_id, 'id_members' => $user_id, 'tanggapan' => $tanggapan, $kebangsaan_bapak));
    			if($insert_id > 0){
    				$this->response(["message" => "Komentar anda berhasil dikirim!", "status" => true], 200);
    			} else {
    				$this->response(["message" => "Gagal mengirim komentar, silahkan ulangi kembali.", "status" => false],200);
    			}
    		} else {
    			$this->response(["message" => "Gagal mengirim komentar, silahkan ulangi lagi.", "status" => false],200);
    		}
    	} else if($param == 'delete'){
            $id = $this->post('id');

            if($id != null){
                $delete_id = $this->tanggapan_m->delete($id);
                if($delete_id){
                    $this->response(["message" => "Komentar telah dihapus.", "status" => true], 200);
                } else {
                    $this->response(["message" => "Komentar gagal dihapus.", "status" => false], 200);
                }
            }
        }
    }

    public function tanggapan_get($param = ''){
    	if($param == 'all'){
    		//get all
    	} else if($param != 'all' && (int)$param > 0){
            $komentar = $this->tanggapan_m->_order_asc()->get_many_by('id_report', $param);
            $this->replaceKomentarByText($komentar);
    		$this->response($komentar, 200);
    	}
    }

    public function like_post($param = ''){
        if($param == 'update'){
            $id_report = $this->post('id_report');
            $id_member = $this->post('id_member');

            if($this->like_m->get_by(array('id_member' => $id_member, 'id_report' => $id_report)) == null){
                $insert_id = $this->like_m->insert(array('id_member' => $id_member, 'id_report' => $id_report));

                if($insert_id > 0){
                    $this->response(["message" => "Berhasil di like.", "status" => true],200);
                } else {
                    $this->response(["message" => "Gagal di like.", "status" => false], 200);
                }
            } else {
                $id = $this->like_m->get_by(array('id_member' => $id_member, 'id_report' => $id_report))->id;
                $delete_id = $this->like_m->delete($id);
                if($delete_id){
                    $this->response(["message" => "Berhasil di unlike.", "status" => false],200);
                } else {
                    $this->response(["message" => "Gagal di unlike.", "status" => false],200);
                }
            }
        }
    }

    public function form_get($param1 = '', $param2 = ''){
        if($param1 == 'all'){

        } else if($param1 == 'layanan'){
            $data_layanan = $this->service_m->get_many_by('id_users', $param2);
            $data_form = array();
            foreach ($data_layanan as $key => $value) {
                # code...
                $data_form[$key] = array('kode_book' => $value->kode_book, 'qrcode' => base_url() . "util/generate_qrcode/" . $value->kode_book, 'status' => $value->status);
            }

            $this->response($data_form, 200);
        } else if($param1 == 'sim'){
            $data_sim = $this->sim_model->get_many_by('id_user', $param2);
            $data_form = array();
            foreach ($data_sim as $key => $value) {
                $data_form[$key] = array('kode_book' => $value->kode_book, 'qrcode' => base_url() . "util/generate_qrcode/" . $value->kode_book, 'status' => $value->status);
            }

            $this->response($data_form, 200);
        } else {

        }
    }

    private function replaceKomentarByText($data = array()){
        foreach ($data as $key => $value) {
            $member = $this->member_m->get($value->id_members);
            $this->replaceMemberIdByText($member);
            $value->id_members = $member;
        }
    }

    private function replaceCadesById($data = array()){
        foreach($data as $key => $item){
            $item->foto_cades = assets_url() . "uploads/images/" . $item->foto_cades;
            $item->id_desa = $this->desa_m->get_by('id_desa', $item->id_desa);
        }
    }

    private function replacePanitiaById($data = array()){
        foreach($data as $key => $item){
            $item->id_tps = $this->tps_m->get_by('id_tps', $item->id_tps);
            $item->id_tps->id_desa = $this->desa_m->get_by('id_desa', $item->id_tps->id_desa);
        }
    }

    private function replaceTpsById($data = array()){
        foreach($data as $key => $item){
            $item->id_desa = $this->desa_m->get_by('id_desa', $item->id_desa);
        }
    }

    private function replaceReportIdByText($data = array()){
        foreach($data as $key => $item){
            $item->image = assets_url() . "uploads/images/" . $item->image;
            $member = $this->member_m->get($item->id_user);
            $this->replaceMemberIdByText($member);
            $item->id_user = $member;
        }
    }

    private function replaceReportItem($data){
        $data->image = assets_url() . "uploads/images/" . $data->image;
        $member = $this->member_m->get($data->id_user);
        $this->replaceMemberIdByText($member);
        $data->id_user = $member;
        $datas = $this->tanggapan_m->_order_asc()->get_many_by('id_report', $data->id);
        foreach ($datas as $key => $value) {
        	$memberv = $this->member_m->get_by('id', $value->id_members);
        	$this->replaceMemberIdByText($memberv);
            $value->id_members = $memberv;
        }
        $data->komentar = $datas;
        $data_like = $this->like_m->get_many_by('id_report', $data->id);
        $this->repplaceLikeById($data_like);
        $data->like = $data_like;
    }

    private function repplaceLikeById($data = array()){
        foreach ($data as $key => $value) {
            # code...
            unset($value->id);
        }
    }

    private function replaceTanggapanWithUser($datas = array()){
        foreach ($datas as $key => $value) {
            $value->id_members = $this->member_m->get($value->id_members);
        }
    }

    private function replaceQrIdByText($data = array()){
        foreach($data as $key => $item){
            $item->id_user = $this->member_m->get($item->id_user);
        }
    }

    private function getStatusMember($data = array()){
    	$status = "";
    	foreach ($data as $key => $value) {
    		if($status == ""){
    			$status = $value->status;
    		} else if($status == 'Y'){
    			$status = $value->status;
    		} else if($status == 'N'){
    			$status = $value->status;
    			break;
    		}
    	}

    	return $status;
    }


    private function warnPoliceMember(){
        $data = $this->member_m->get_many_by(array('tipe' => 'polisi'));
        foreach($data as $key => $value){
            if($value->player_id != ""){
            	$this->sendWebNotification("Notifikasi", "Ada Quick Response Baru!");
                $this->sendNotification("Perhatian!", "Ada Quick Response Baru!", $value->player_id);
            }
        }
    }

    private function sendNotificationAll($title = "", $content = "") {
        $content = array(
            "en" => $content,
            "id" => $content
        );


        $fields = array(
            'app_id' => "b18f4700-9902-4ea6-b5da-e919a564246f",
            'included_segments' => array('All'),
            'headings' => array("en" => $title, "id" => $title),
            'contents' => $content
        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic Njg2ZWQ4YzUtZWYzYy00YjRlLWExZTQtNjczNGQyYzkwM2E5'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }


    private function sendNotification($title = "", $content = "", $player_id = "") {
        $content = array(
            "en" => $content,
            "id" => $content
        );


        $fields = array(
            'app_id' => "b18f4700-9902-4ea6-b5da-e919a564246f",
            'include_player_ids' => array($player_id),
            'headings' => array("en" => $title, "id" => $title),
            'contents' => $content,
            'android_sound' => 'polisi'
        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic Njg2ZWQ4YzUtZWYzYy00YjRlLWExZTQtNjczNGQyYzkwM2E5'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    private function sendWebNotification($title = "", $content = "") {
        $content = array(
            "en" => $content,
            "id" => $content
        );


        $fields = array(
            'app_id' => "d2752609-88b4-45b7-a08e-90faf2ee1ce5",
            'included_segments' => array('All'),
            'headings' => array("en" => $title, "id" => $title),
            'contents' => $content
        );

        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
            'Authorization: Basic ZTdmMzc5NzQtZjY1OS00M2Y5LThkZmEtZDhmOTRkYTM3MGUz'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }

    private function generateKodeBook($awalan = '', $id = ''){
        return $awalan . sprintf("%06d", $id);
    }

}