Name: <?=$model->name;?><br />
Contact: <?=$model->contact;?><br />
E-mail: <?=$model->email;?><br />
Interest: <?=is_array($model->interest) ? json_encode($model->interest) : $model->interest;?><br />
Location: <?=$model->location;?><br />
Message:<br />
<?=$model->message;?>