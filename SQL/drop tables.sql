2.  select album.albumid, album.title, artist.name from album 
inner join artist on album.artistid=artist.ARTISTID;
select album.albumid, album.title, artist.name from album 
inner join artist on album.artistid=artist.ARTISTID;

SELECT parcel_reports.id, parcel_reports.customer_ID, parcel_status.status FROM parcel_reports INNER JOIN parcel_status on parcel_reports.parcel_ID = parcel_status.parcel_ID WHERE parcel_status.status = 'Pickedup' AND parcel_reports.customer_id = '1';

DROP TABLE customer;
DROP TABLE location;
DROP TABLE login;
DROP TABLE parcel;
DROP TABLE parcel_reports;
DROP TABLE parcel_status;
DROP TABLE staff;
DROP TABLE vehicle;
DROP TABLE admin;
DROP TABLE courier;

