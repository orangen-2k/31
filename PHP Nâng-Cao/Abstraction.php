<?php 
abstract class MyAbstract {
    public $name;
    public function doThis() {
        // do this
    }
    abstract public function doThat();
    abstract public function setName($name);
}
class poly_base_Article {
    //...
    public function write($type) {
        $ret = '';
        switch($type) {
            case 'XML':
                $ret = '<article>';
                $ret .= '<title>' . $obj->title . '</title>';
                $ret .= '<author>' . $obj->author . '</author>';
                $ret .= '<date>' . $obj->date . '</date>';
                $ret .= '<category>' . $obj->category . '</category>';
                $ret .= '</article>';
                break;
            case 'JSON':
                $array = array('article' => $obj);
                $ret = json_encode($array);
                break;
        }
        return $ret;
    }
}
interface poly_writer_Writer {
    public function write(poly_base_Article $obj);
}
class poly_writer_XMLWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $ret = '<article>';
        $ret .= '<title>' . $obj->title . '</title>';
        $ret .= '<author>' . $obj->author . '</author>';
        $ret .= '<date>' . $obj->date . '</date>';
        $ret .= '<category>' . $obj->category . '</category>';
        $ret .= '</article>';
        return $ret;
    }
}
class poly_writer_JSONWriter implements poly_writer_Writer {
    public function write(poly_base_Article $obj) {
        $array = array('article' => $obj);
        return json_encode($array);
    }
}
class poly_base_Factory {
    public static function getWriter() {
        // grab request variable
        // construct our class name and check its existence
            // return a new Writer object
        // otherwise we fail
        throw new Exception('Unsupported format');
    }
}
$article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);
 
try {
    $writer = poly_base_Factory::getWriter();
}
catch (Exception $e) {
    $writer = new poly_writer_XMLWriter();
}
 
echo $article->write($writer);
?> 

