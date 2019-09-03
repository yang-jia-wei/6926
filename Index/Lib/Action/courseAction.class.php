<?php
class courseAction extends Action {
    public function index(){
        //浏览量
        $site =get_site();

        $p=pg('p')==''?1:pg('p');
        $classify_id=get_classify_id();
        $content_id=pg('content_id');
        $type_id=get_type_id();

        $dir = __FILE__;
        $file = fopen($dir,"r");
        if ($file){
            if (!feof($file)) { //判断是否到最后一行
                $course = M('course')->where(array('type_id' => $type_id, 'course_id' => 5))->select();
                $temp = $course[0]['course_traffic']+1;
                M('course')-> where(array('type_id' => $type_id, 'course_id' => 5))->setField('course_traffic',$temp);

            }

        }
		$this->display();
    }

    public function details(){
        //浏览量
        $site =get_site();

        $p=pg('p')==''?1:pg('p');
        $classify_id=get_classify_id();
        $content_id=pg('content_id');
        $type_id=get_type_id();

        $dir = __FILE__;
        $file = fopen($dir,"r");
        if ($file){
            if (!feof($file)) { //判断是否到最后一行
                $course = M('course')->where(array('type_id' => $type_id, 'course_id' => $content_id))->select();
                $temp = $course[0]['course_traffic']+1;
                M('course')-> where(array('type_id' => $type_id, 'course_id' => $content_id))->setField('course_traffic',$temp);

            }

        }
        $this->display();
    }
	public function add_save()
	{
		$data = pg('data');
		$type_id = $data['type_id'];
		$classify_id = pg('classify_id');
		$table_name = M('classify_type')->where(array('type_id' => $type_id))->getField('table_name');
		$content = M($table_name)->where(array($table_name.'_id' => $content_id))->select();
		$list = M('input')->where(array('type_id' => $type_id, 'show_switch' => 2, 'input_type_id' => 4))->select();
		foreach($list as $k => $v){
			$data[$v['field_name']]=serialize($data[$v['field_name']]);
		}

		$list = M('input')->where(array('type_id' => $type_id, 'show_switch' => 2, 'input_type_id' => 7))->select();
		foreach($list as $k => $v){
			if(!empty($_FILES[$v['field_name']]['tmp_name'])){
				$data[$v['field_name']] = $this->up_file(array('name' => $v['field_name']));
			}
		}

		$list = M('input')->where(array('type_id' => $type_id, 'show_switch' => 2, 'input_type_id' => 8))->select();
		foreach($list as $k => $v)
		{
			$data[$v['field_name']]=strtotime($data[$v['field_name']]);
		}

         //dump($data);exit;

		$id = M($table_name)->data($data)->add();
		M('relevance')->data(array('classify_id'=> $classify_id, 'content_id' => $id, 'main_id' => 1, 'type_id' => $type_id))->add();
		$this->success('提交成功');
	}
}
