let utc = new Date().toJSON().slice(0,10).replace(/-/g,'-');
document.getElementById('data_record').value = utc;
