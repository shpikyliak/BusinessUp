<?
require_once 'classes/DB.php';

try {
    $db = new Db();
    $result = $db->getAll();
    $departments = array('Робототехника' => array(), 'Нано-хирургия' => array(), 'Инженерия' => array());
    for ($i = 0; $i < count($result); $i++) {
        array_push($departments[$result[$i]['department']], ['name' => $result[$i]['name'], 'sername' => $result[$i]['sername']]);
    }
    $html = '<table class="table-bordered" id="robotics">
            <caption>Робототехника</caption>
            <tr><th>#</th><th>Имя</th><th>Фамилия</th></tr>';
    for ($i = 0; $i < count($departments['Робототехника']); $i++) {
        $html .= '<tr>
                    <td class="id_robotics">'. ($i+1).'</td>
                    <td class="name">'.$departments['Робототехника'][$i]['name'].'</td>
                    <td class="sername">'.$departments['Робототехника'][$i]['sername'].'</td>
                </tr>';
    }
    $html .= '</table>';
    $html .= '<table class="table-bordered" id="nanosurgery">
            <caption>Нано-хирургия</caption>
            <tr><th>#</th><th>Имя</th><th>Фамилия</th></tr>';
    for ($i = 0; $i < count($departments['Нано-хирургия']); $i++) {
        $html .= '<tr>
                    <td class="id_robotics">'. ($i+1).'</td>
                    <td class="name">'.$departments['Нано-хирургия'][$i]['name'].'</td>
                    <td class="sername">'.$departments['Нано-хирургия'][$i]['sername'].'</td>
                </tr>';
    }
    $html .= '</table>';
    $html .= '<table class="table-bordered" id="engineering">
            <caption>Инженерия</caption>
            <tr><th>#</th><th>Имя</th><th>Фамилия</th></tr>';
    for ($i = 0; $i < count($departments['Инженерия']); $i++) {
        $html .= '<tr>
                    <td class="id_robotics">'. ($i+1).'</td>
                    <td class="name">'.$departments['Инженерия'][$i]['name'].'</td>
                    <td class="sername">'.$departments['Инженерия'][$i]['sername'].'</td>
                </tr>';
    }
    $html .= '</table>';
    echo $html;
} catch (Exception $e) {
    echo "<h2 align='center'>" . $e->getMessage() . "</h2>";
}
