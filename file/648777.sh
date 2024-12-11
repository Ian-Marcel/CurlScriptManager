#!/usr/bin/env bash

exec </dev/tty

NC='\033[0m' # No Color
BCYAN='\033[1;36m'
BGREEN='\033[1;32m'
BYELLOW='\033[1;33m'
BRED='\033[1;31m'

echo -e "
Hi! Quick thanks for using my project, it means a lot, any suggestions for improvements with 
features or code(for pull requests) will be well received, simply open an issue in the GitHub 
repository page or just use this link:${BCYAN} https://github.com/Ian-Marcel/Easy-Sourced-NGINX/issues/new ${NC}
"
git clone --quiet https://github.com/Ian-Marcel/Easy-Sourced-NGINX.git && cd Easy-Sourced-NGINX || exit 1

echo -e "${BYELLOW}Welcome to the ${BCYAN}Easy-Sourced-NGINX ${BYELLOW}wizard! ${NC}

This wizard casts:

${BGREEN}
1) Installation ${BYELLOW}

2) Reinstallation ${BGREEN}(with NGINX configuration folder backup!) ${BRED}

3) Uninstallation ${BCYAN}

${BYELLOW}
NOTE: reinstall only backup your NGINX configuration folder if it is located in the
default location${BCYAN}(aka.:/etc/nginx)${BYELLOW}!!!
${NC}"


    read -rp $'Please enter an option using it respective number or stop the wizard by entering 0(zero) \033[1;33m[0,1,2,3]: \033[1;0m' CURL_ESX &&
        if [[ "$CURL_ESX" = 1 ]]; then
            source install.sh
            #break
        elif [[ "$CURL_ESX" = 2 ]]; then
            tar -zcf nginx-backup.tar.gz -C /etc/ nginx &&
                source uninstall.sh &&
                source install.sh &&
                sudo rm -r /etc/nginx &&
                tar -zxf nginx-backup.tar.gz &&
                mv nginx /etc/ &&
                rm nginx-backup.tar.gz
            #break
        elif [[ "$CURL_ESX" = 3 ]]; then
            source uninstall.sh
            #break
        elif [[ "$CURL_ESX" = 0 ]]; then
            echo -e "\n${BGREEN}The wizard was stopped, Bye Bye... \n ${NC}"
            cd .. && rm -rf Easy-Sourced-NGINX
            exit 0
        else
            echo -e "${BYELLOW}Please enter between 0 and 3. ${NC}"
        fi


if [ -t 0 ]; then
    echo "Interactive mode detected"
else
    echo "Non-interactive mode detected"
fi

cd .. && rm -rf Easy-Sourced-NGINX
