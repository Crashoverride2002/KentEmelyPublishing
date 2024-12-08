create table #__virtuemart_tax_calculated
(
    ID int not null auto_increment,
    calculation_date date,
    payed enum('Y','N'),
    ingoingTax float,
    outgoingTax float,
    TaxToBePayed float,
    primary key(ID)
);

create table #__virtuemart_tax_calculation
(
    ID int not null auto_increment,
    invoice_ID varchar(255),
    invoice_date date,
    invoice_status enum('I','X'),
    invoice_amount float,
    invoice_tax_amout float,
    invoice_calculated_date date,
    primary key(ID)
);
