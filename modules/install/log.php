<?php

switch($_GET["step"]){
	default:
    include_once('modules/mastersearch2/class_mastersearch2.php');
    $ms2 = new mastersearch2();

    $ms2->query['from'] = "%prefix%log AS l
      LEFT JOIN %prefix%user AS u ON u.userid = l.userid";
    $ms2->query['default_order_by'] = 'l.date DESC';
    $ms2->config['EntriesPerPage'] = 50;

    $ms2->AddTextSearchField(t('Meldung'), array('l.description' => 'like'));
    $ms2->AddTextSearchField(t('Gruppe'), array('l.sort_tag' => 'like'));

    $list = array('' => t('Alle'), '0' => t('System'));
    $res = $db->qry("SELECT l.userid, u.username FROM %prefix%log AS l
      LEFT JOIN %prefix%user AS u ON u.userid = l.userid
      GROUP BY l.userid");
    while($row = $db->fetch_array($res)) if($row['userid']) $list[$row['userid']] = $row['username'];
    $db->free_result($res);
    $ms2->AddTextSearchDropDown(t('Auslöser'), 'l.userid', $list);

    $list = array('' => t('Alle'));
    $row = $db->qry("SELECT sort_tag FROM %prefix%log GROUP BY sort_tag");
    while($res = $db->fetch_array($row)) if($res['sort_tag']) $list[$res['sort_tag']] = $res['sort_tag'];
    $db->free_result($row);
    $ms2->AddTextSearchDropDown(t('Gruppe'), 'l.sort_tag', $list);

    $ms2->AddTextSearchDropDown(t('Prioritat'), 'l.type', array('' => 'Alle', '1' => 'Niedrig', '2' => 'Normal', '3' => 'Hoch'));

    $ms2->AddSelect('u.userid');
    $ms2->AddResultField(t('Meldung'), 'l.description', '', 140);
    $ms2->AddResultField(t('Gruppe'), 'l.sort_tag');
    $ms2->AddResultField(t('Datum'), 'UNIX_TIMESTAMP(l.date) AS date', 'MS2GetDate');
    $ms2->AddResultField(t('Auslöser'), 'u.username', 'UserNameAndIcon');
    $ms2->AddResultField(t('Prio.'), 'l.type');

    $ms2->AddIconField('details', 'index.php?mod=install&action=log&step=2&logid=', t('Details'));
    if ($auth['type'] >= 3) $ms2->AddMultiSelectAction(t('Löschen'), "index.php?mod=install&action=log&step=10", 1);

    $ms2->PrintSearch('index.php?mod=install&action=log', 'l.logid');
	break;

  case 2:
    $log = $db->qry_first("SELECT *, UNIX_TIMESTAMP(date) AS date FROM %prefix%log WHERE logid = %int%", $_GET['logid']);
    $dsp->AddSingleRow($log['sort_tag']);
    $dsp->AddSingleRow($log['description']);
    $dsp->AddSingleRow($func->unixstamp2date($log['date'], 'datetime'));
    if ($log['userid']) $dsp->AddSingleRow($dsp->FetchUserIcon($log['userid']));
    $dsp->AddBackButton("index.php?mod=install&action=log", '');
    $dsp->AddContent();
  break;
  
  case 10:
    include_once('inc/classes/class_masterdelete.php');
    $md = new masterdelete();
    $md->MultiDelete('log', 'logid');
  break;
}
?>