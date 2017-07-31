<?PHP

class Init extends CI_Model {

    function __construct () {
        parent::__construct ();
    }
    function initPath ($contoller_path='') {
        $dat["base_url"] = $this->config->item ("base_url");
        $dat["css"]      = $this->config->item ("css");
        $dat["js"]       = $this->config->item ("js");
        $dat["images"]   = $this->config->item ("images");
        $dat["path"]     = $dat["base_url"].$contoller_path;
        $dat["title"]    = "";
        $dat["ff"] = "fffccd";
        return $dat;
	 }
}
