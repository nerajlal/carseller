import pyqrcode
import png
from pyqrcode import QRCode
import argparse
  

if __name__ == '__main__':
    parser = argparse.ArgumentParser()
    parser.add_argument("--file_name", help="File name only chars")
    args = parser.parse_args()
    file_name = args.file_name
    print('HUP',file_name)

    # String which represents the QR code
    #s = "hup"
    s=file_name
      
    # Generate QR code
    url = pyqrcode.create(s)
      
    # Create and save the svg file naming "myqr.svg"
    url.svg("myqr1.svg", scale = 8)
    file_name='qr/'+file_name+'.png'
      
    # Create and save the png file naming "myqr.png"
    url.png(file_name, scale = 6)

