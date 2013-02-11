<?php

/**
 * This is the model class for table "tbl_product".
 *
 * The followings are the available columns in table 'tbl_product':
 * @property integer $id
 * @property string $name
 * @property double $price
 * @property double $old_price
 * @property integer $in_stock
 * @property string $create_at
 * @property string $origin
 * @property string $warranty
 * @property integer $approved
 * @property string $image
 * @property string $status
 * @property string $resource_img
 * @property string $resource_video
 * @property string $resource_audio
 * @property integer $product_category_id
 * @property integer $manufacture_id
 * @property integer $distributor_id
 *
 * The followings are the available model relations:
 * @property Article[] $articles
 * @property OrderDetail[] $orderDetails
 * @property ProductCategory $productCategory
 * @property Distributor $distributor
 * @property Manufacturer $manufacture
 * @property ProductInfo[] $productInfos
 */
class Product extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Product the static model class
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
		return 'tbl_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, price, in_stock, create_at, approved, product_category_id, manufacture_id, distributor_id', 'required'),
			array('in_stock, approved, product_category_id, manufacture_id, distributor_id', 'numerical', 'integerOnly'=>true),
			array('price, old_price', 'numerical'),
			array('name', 'length', 'max'=>255),
			array('origin', 'length', 'max'=>30),
			array('warranty, status', 'length', 'max'=>20),
			array('image', 'length', 'max'=>100),
			array('resource_img, resource_video, resource_audio', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, price, old_price, in_stock, create_at, origin, warranty, approved, image, status, resource_img, resource_video, resource_audio, product_category_id, manufacture_id, distributor_id', 'safe', 'on'=>'search'),
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
			'articles' => array(self::HAS_MANY, 'Article', 'product_id'),
			'orderDetails' => array(self::HAS_MANY, 'OrderDetail', 'product_id'),
			'productCategory' => array(self::BELONGS_TO, 'ProductCategory', 'product_category_id'),
			'distributor' => array(self::BELONGS_TO, 'Distributor', 'distributor_id'),
			'manufacture' => array(self::BELONGS_TO, 'Manufacturer', 'manufacture_id'),
			'productInfos' => array(self::HAS_MANY, 'ProductInfo', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Mã',
			'name' => 'Tên sản phẩm',
			'price' => 'Giá mới',
			'old_price' => 'Giá cũ',
			'in_stock' => 'Tồn hàng',
			'create_at' => 'Ngày tạo',
			'origin' => 'Xuất xứ',
			'warranty' => 'Bảo hành',
			'approved' => 'Kích hoạt',
			'image' => 'Hình ảnh',
			'status' => 'Trạng thái',
			'resource_img' => 'Danh sách ảnh',
			'resource_video' => 'Danh sách Video',
			'resource_audio' => 'Danh sách Audio',
			'product_category_id' => 'Loại sản phẩm',
			'manufacture_id' => 'Nhà sản xuất',
			'distributor_id' => 'Nhà phân phối',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price);
		$criteria->compare('old_price',$this->old_price);
		$criteria->compare('in_stock',$this->in_stock);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('origin',$this->origin,true);
		$criteria->compare('warranty',$this->warranty,true);
		$criteria->compare('approved',$this->approved);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('resource_img',$this->resource_img,true);
		$criteria->compare('resource_video',$this->resource_video,true);
		$criteria->compare('resource_audio',$this->resource_audio,true);
		$criteria->compare('product_category_id',$this->product_category_id);
		$criteria->compare('manufacture_id',$this->manufacture_id);
		$criteria->compare('distributor_id',$this->distributor_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function getDistributorList() {
        $result =  Yii::app()->db->createCommand()
                            ->select(array('id','name'))
                            ->from('tbl_distributor')
                            ->queryAll();
        $distributors = array();

        foreach($result as $key=>$value) {
            $distributors[$value['id']] = $value['name'];

        }
        return $distributors;
    }

    public function getManufacturerList() {
        $result =  Yii::app()->db->createCommand()
            ->select(array('id','name'))
            ->from('tbl_manufacturer')
            ->queryAll();
        $manufacturers = array();

        foreach($result as $key=>$value) {
            $manufacturers[$value['id']] = $value['name'];

        }
        return $manufacturers;
    }

    public function getProductCategoryList() {
        $result =  Yii::app()->db->createCommand()
            ->select(array('id','name'))
            ->from('tbl_product_category')
            ->queryAll();
        $productCategories = array();

        foreach($result as $key=>$value) {
            $productCategories[$value['id']] = $value['name'];

        }
        return $productCategories;
    }

}