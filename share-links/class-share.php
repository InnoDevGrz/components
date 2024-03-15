<?php


class tsc__ShareButtons
{

    protected function get_protocol()
    {
        if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
            // HTTPS-Anforderung
            return 'https:';
        } else {
            // HTTP-Anforderung
            return 'http:';
        }
    }

    protected function getCurrentURL()
    {
        $protocol = $this->get_protocol();

        return $protocol . "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public function get_shareOnFacebookButton()
    {
        $url = $this->getCurrentURL();
        $url = urlencode($url);
        $icon = '<i class="tsc-icon flaticon-facebook" aria-hidden="true"></i>';
        $html = "<a href='https://www.facebook.com/sharer/sharer.php?u={$url}' target='_blank' aria-label='" . esc_attr__('share us at Facebook', 'ize') . "'>{$icon}</a>";
        return $html;
    }

    public function get_shareOnTwitterButton()
    {
        $url = $this->getCurrentURL();
        $url = urlencode($url);
        $icon = '<i class="tsc-icon flaticon-twitter" aria-hidden="true"></i>';
        $html = "<a href='https://twitter.com/intent/tweet?url={$url}' target='_blank' aria-label='" . esc_attr__('share us at Twitter', 'ize') . "'>{$icon}</a>";
        return $html;
    }

    public function get_shareMail()
    {
        $contact_data = new tsc__ContactInfos();
        return $contact_data->get_emailIcon();
    }



    public function get_shareOnLinkedIn()
    {
        $url = $this->getCurrentURL();
        $url = urlencode($url);
        $icon = '<i class="tsc-icon flaticon-linkedin" aria-hidden="true"></i>';
        $html = "<a href='https://www.linkedin.com/shareArticle?mini=true&url={$url}' target='_blank' aria-label='" . esc_attr__('share us at LinkedIn', 'ize') . "'>{$icon}</a>";
        return $html;
    }


    public function get_shareOnWhatsApp()
    {
        $url = $this->getCurrentURL();
        $url = urlencode($url);
        $icon = '<i class="tsc-icon flaticon-whatsapp" aria-hidden="true"></i>';
        $html = "<a href='https://api.whatsapp.com/send?text={$url}' target='_blank' aria-label='" . esc_attr__('share us at LinkedIn', 'ize') . "'>{$icon}</a>";
        return $html;
    }




    public function get_shareButtons($headline_tag)
    {
        $html = '<div class="share">';  // share button section init
        $html .= "<{$headline_tag} class='title'>Teile uns auf:</{$headline_tag}>";
        $html .= $this->get_shareOnFacebookButton();
        $html .= $this->get_shareMail();
        $html .= $this->get_shareOnLinkedIn();
        $html .= $this->get_shareOnWhatsApp();
        $html .= '</div>'; // share button section end

        return $html;

    }


}
