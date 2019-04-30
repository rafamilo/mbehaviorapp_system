<?php
use Migrations\AbstractMigration;

class UsersAddAditinalDeviceData extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->execute('ALTER TABLE users ADD COLUMN sex VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN gender VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN civilState VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN contry VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN familyIncome VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN schooling VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN ocupation VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN imLiving VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN isDateTimePickerVisible VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN showOtherGender VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN showOtherContry VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN showOtherLiving VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN selectedDate VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN apiLevel VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN appName VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN phoneBrand VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN phoneCarrier VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN phoneModel VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN phoneNumber VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN phoneManufacturer VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN systemName VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN systemVersion VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN timezone VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN batteryLevel VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN ip VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN userAgent VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN isEmulator VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN isTablet VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN deviceType VARCHAR(150)');
        $this->execute('ALTER TABLE users ADD COLUMN connectionInfo VARCHAR(150)');
    }

    public function down()
    {
        $this->execute('ALTER TABLE users DROP COLUMN sex');
        $this->execute('ALTER TABLE users DROP COLUMN gender');
        $this->execute('ALTER TABLE users DROP COLUMN civilState');
        $this->execute('ALTER TABLE users DROP COLUMN contry');
        $this->execute('ALTER TABLE users DROP COLUMN familyIncome');
        $this->execute('ALTER TABLE users DROP COLUMN schooling');
        $this->execute('ALTER TABLE users DROP COLUMN ocupation');
        $this->execute('ALTER TABLE users DROP COLUMN imLiving');
        $this->execute('ALTER TABLE users DROP COLUMN isDateTimePickerVisible');
        $this->execute('ALTER TABLE users DROP COLUMN showOtherGender');
        $this->execute('ALTER TABLE users DROP COLUMN showOtherContry');
        $this->execute('ALTER TABLE users DROP COLUMN showOtherLiving');
        $this->execute('ALTER TABLE users DROP COLUMN selectedDate');
        $this->execute('ALTER TABLE users DROP COLUMN apiLevel');
        $this->execute('ALTER TABLE users DROP COLUMN appName');
        $this->execute('ALTER TABLE users DROP COLUMN phoneBrand');
        $this->execute('ALTER TABLE users DROP COLUMN phoneCarrier');
        $this->execute('ALTER TABLE users DROP COLUMN phoneModel');
        $this->execute('ALTER TABLE users DROP COLUMN phoneNumber');
        $this->execute('ALTER TABLE users DROP COLUMN phoneManufacturer');
        $this->execute('ALTER TABLE users DROP COLUMN systemName');
        $this->execute('ALTER TABLE users DROP COLUMN systemVersion');
        $this->execute('ALTER TABLE users DROP COLUMN timezone');
        $this->execute('ALTER TABLE users DROP COLUMN batteryLevel');
        $this->execute('ALTER TABLE users DROP COLUMN ip');
        $this->execute('ALTER TABLE users DROP COLUMN userAgent');
        $this->execute('ALTER TABLE users DROP COLUMN isEmulator');
        $this->execute('ALTER TABLE users DROP COLUMN isTablet');
        $this->execute('ALTER TABLE users DROP COLUMN deviceType');
        $this->execute('ALTER TABLE users DROP COLUMN connectionInfo');
    }
}
