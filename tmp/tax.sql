use Publishing_EK;

drop table if exists book_virtuemart_tax_calculation;
create table books_virtuemart_tax_calculation
(
    ID int not null auto_increment,
    invoice_ID varchar(255),
    invoice_date date,
    invoice_status enum('I','X') not null default 'I',
    invoice_amount float default 0.0,
    invoice_tax_amount float default 0.0,
    invoice_calculated_date date,
    PRIMARY KEY (ID)
);

drop table if exists book_virtuemart_tax_calculated;
create table books_virtuemart_tax_calculated
(
    ID int not null auto_increment,
    calculation_date date,
    payed enum('Y','N'),
    ingoingTax float,
    outgoingTax float,
    TaxToBePayed float,
    PRIMARY KEY (ID)
);    
