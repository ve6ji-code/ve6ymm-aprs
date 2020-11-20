# VE6YMM APRS - Stony Mountain

## Web Page
aprs.ve6ji.ca
## Settings
### TNC
Kantronics KP3
* Setting 9600 8 N 1 Hardware
* Kiss Mode
### Radio
Motorola xxx on 144.390 MHz

### APRX aprx.conf
``` hoo
        mycall  VE6YMM-1
        myloc lat xxxN lon xxxW //TODO:
        <aprsis>
            passcode 24243
            server   noam.aprs2.net   
        </aprsis>
        <logging>
            pidfile /var/run/aprx.pid
            rflog /var/log/aprx/aprx-rf.log
            aprxlog /var/log/aprx.log
            #dprslog /var/log/aprx/dprs.log
        </logging>
        <interface>
           serial-device /dev/ttyUSB0  9600 8n1    KISS
           tx-ok        true    # transmitter enable defaults to false
           telem-to-is  true # set to 'false' to disable
        </interface><digipeater>
        transmitter $mycall
            <source>
                source $mycall
                filter m/200
            </source>
            <source>
                source        APRSIS
                relay-type    third-party
                via-path      WIDE2-2 # default: none 
                msg-path      WIDE2-2 # default: none
                ratelimit     60 120
                filter m/400
            </source>
    </digipeater>
    <beacon>
        beaconmode both
        cycle-size 15m
        beacon object "VE6YMM-1 " symbol "I#" $myloc comment " FMARC - Stony Mountain TX-iGate"
    </beacon>
```
 ### Raspberry Pi 4 - 4Gb
 * OS: Raspbian 10 "Buster"
 * Kernel 5.4.72-v7l+
 * ssh pi@aprs.ve6ji.ca:22
 * ip: xxx.xxx.xxx.xx //TODO:
 #### Logs
 /var/log/aprx.log
 /var/log/aprx-rf.log

 ---EOF---
