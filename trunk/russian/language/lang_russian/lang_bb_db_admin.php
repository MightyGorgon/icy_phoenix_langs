<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
   */
/**
*
* @Extra credits for this file
* aUsTiN-Inc - (austin_inc@hotmail.com) - (phpbb-amod.com)
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'Db_browse' => '�����',
'Db_truncate' => '��������',
'Db_optimize' => '��������������',
'Db_drop' => 'Drop',
'Db_repair' => '������',
'Db_structure' => '���������',
'Db_explain' => '��������� ��������',

	'db_table_name' => '�������� �������',
 'db_action' => '��������',
 'db_type' => '���',
 'db_row_format' => '������ ������',
 'db_rows' => '������',
 'db_avg_r_len' => '� ������� ����� ������',
 'db_data_len' => '����� ������',
 'db_max_dat_len' => '������������ ����� ������',
 'db_index_len' => '��������� �����',
 'db_overhead' => '�������',
 'db_auto_inc' => '���� ����������',
 'db_with_sel' => '� ���������� ���������:',
 'db_field' => '����',
 'db_type' => '���',
 'db_null' => '������ ���������',
 'db_key' => '�������',
 'db_default' => '�������� �� ���������',
 'db_extra' => '�������������� ������������',

	'db_unauthed' => '������������������� ������.',
 'db_tru_warning' => '������������� �� �� �������, ��� �� ������ ����� %s?',
 'db_dro_warning' => '������������� �� �� �������, ��� �� ������ �������� %s?',
 'db_warning_y' => '��',
 'db_warning_n' => '���',
 'db_opt_success' => '�������������� ������� <b> %s </b>, ������� �����������.',
 'db_tru_success' => '������� ������� <b> %s </b>, ������� �����������.',
 'db_dro_success' => '������� �������� <b> %s </b>, ������� �����������.',
 'db_rep_success' => '������� ������� <b> %s </b>, ������� �����������.',
 'db_explained' => '������������ �������: ��������� ����� ���������� ������������� ���� ������. <br/> ������� �������: ��������� ������� ���� �� �������������� ����������. <br/> �����: �������� ��� ������������� ������ � �������. <br/> ��������: ������ ������� �� ����� ���� ������.',
 'db_back' => '������� %s�����%s, ����� ������������ � �������� ��������.',
 'db_change_exp' => '��� ������������� �����, �� ������ � ��������� ��������� SQL \����� ���, �������� �, �������� �������, ��������, ������� ��, ������� ��������, �������, � �.�.. �������� �������, ������� �� ������, seperate ������ ������� SQL � ������ � �������.',
 'db_submit_q' => '������������ ������',
 'db_sql_total' => '������ SQL # %s',
 'db_aff_total' => '������� �����������. ���������� ������: %s',
 'db_no_query' => '�� �� ������� ������!',
 'db_sql_field_changed' => '���������� ��� ����.',
 'db_sql_query_db' => '������� ������ ����� ���� ������:',
 'DB_Admin' => 'IP MyAdmin',
	)
);

?>