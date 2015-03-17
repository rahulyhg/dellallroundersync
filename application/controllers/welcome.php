<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        echo "sync is working.";
    }
    public function syncuser() {
        $data = json_decode(file_get_contents('php://input'), true);
        $user = $data['user'];
        $userid2 = $user["id"];
        $username = $user["name"];
        $useremail = $user["email"];
        $phonearray = $user["phone"];
        $phonearray = explode(",", $phonearray);
        $userphone = $phonearray[0];
        if ($userphone[1]) {
            $usercity = $phonearray[1];
        } else {
            $usercity = "";
        }
        $usermessage = $user["message"];
        $userdots = $user["dots"];
        $userjerseyscore = $user["jerseyscore"];
        $usertesttime = $user["testtime"];
        $usercertificate = $user["certificate"];
        if ($username != "") {
            //echo "INSERT INTO USERS (name, email, phone,message, dots, jerseyscore, testtime, certificate) VALUES ('$username','$useremail','$userphone','$usermessage','$userdots','$userjerseyscore','$usertesttime', '$usercertificate')";
            $query = $this->db->query("INSERT INTO `users` (name, email, phone,message, dots, jerseyscore, testtime, certificate,city) VALUES ('$username','$useremail','$userphone','$usermessage','$userdots','$userjerseyscore','$usertesttime', '$usercertificate','$usercity')");
            $userid = $this->db->insert_id();
            $review = $data['review'];
            $ruserid = $review["userid"];
            $rflexibility = $review["flexibility"];
            $rlightweight = $review["lightweight"];
            $reasytocarry = $review["easytocarry"];
            $rallfeature = $review["allfeature"];
            $rscreenclarity = $review["screenclarity"];
            $rstylus = $review["stylus"];
            $reasytouse = $review["easytouse"];
            $rotherfeature = $review["otherfeature"];
            $rtravel = $review["travel"];
            $rharddrive = $review["harddrive"];
            $ralluse = $review["alluse"];
            $rversatile = $review["versatile"];
            $rbuiltinstylus = $review["builtinstylus"];
            $rotheruse = $review["otheruse"];
            $rrecommend = $review["recommend"];
            $rupdates = $review["updates"];
            $data["message"] = $user;
            $query1 = $this->db->query("INSERT INTO `reviews` (userid, flexibility, lightweight, easytocarry, allfeature, screenclarity, stylus, easytouse, otherfeature, travel, harddrive, alluse, versatile, builtinstylus, otheruse, recommend, updates) VALUES ('$userid','$rflexibility','$rlightweight','$reasytocarry','$rallfeature','$rscreenclarity','$rstylus', '$reasytouse','$rotherfeature', '$rtravel', '$rharddrive', '$ralluse', '$rversatile', '$rbuiltinstylus', '$rotheruse', '$rrecommend', '$rupdates')");
        }
        $this->load->view("json", $data);
    }
}
