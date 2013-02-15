<?php

/**
 * This is the model class for table "tbl_article".
 *
 * The followings are the available columns in table 'tbl_article':
 * @property integer $id
 * @property string $title
 * @property string $short_desc
 * @property string $full_desc
 * @property string $create_at
 * @property string $update_at
 * @property integer $view_number
 * @property integer $approved
 * @property string $resource_img
 * @property string $resource_audio
 * @property string $resource_video
 * @property integer $user_id
 * @property integer $article_category_id
 * @property integer $product_id
 *
 * The followings are the available model relations:
 * @property User $user
 * @property ArticleCategory $articleCategory
 * @property Product $product
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Article the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, short_desc, full_desc, create_at, user_id, article_category_id', 'required'),
			array('view_number, approved, user_id, article_category_id, product_id', 'numerical', 'integerOnly'=>true),
			array('resource_img, resource_audio, resource_video', 'length', 'max'=>200),
			array('update_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, short_desc, full_desc, create_at, update_at, view_number, approved, resource_img, resource_audio, resource_video, user_id, article_category_id, product_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
			'articleCategory' => array(self::BELONGS_TO, 'ArticleCategory', 'article_category_id'),
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'short_desc' => 'Short Desc',
			'full_desc' => 'Full Desc',
			'create_at' => 'Create At',
			'update_at' => 'Update At',
			'view_number' => 'View Number',
			'approved' => 'Approved',
			'resource_img' => 'Resource Img',
			'resource_audio' => 'Resource Audio',
			'resource_video' => 'Resource Video',
			'user_id' => 'User',
			'article_category_id' => 'Article Category',
			'product_id' => 'Product',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('short_desc',$this->short_desc,true);
		$criteria->compare('full_desc',$this->full_desc,true);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('update_at',$this->update_at,true);
		$criteria->compare('view_number',$this->view_number);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('resource_img',$this->resource_img,true);
		$criteria->compare('resource_audio',$this->resource_audio,true);
		$criteria->compare('resource_video',$this->resource_video,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('article_category_id',$this->article_category_id);
		$criteria->compare('product_id',$this->product_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}