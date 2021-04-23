import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { faFacebookF } from "@fortawesome/free-brands-svg-icons/faFacebookF";
import { faTwitter } from "@fortawesome/free-brands-svg-icons/faTwitter";
import { faLinkedinIn } from "@fortawesome/free-brands-svg-icons/faLinkedinIn";
import { faYoutube } from "@fortawesome/free-brands-svg-icons/faYoutube";
import { faLinkedin } from "@fortawesome/free-brands-svg-icons/faLinkedin";

library.add(faFacebookF, faLinkedinIn, faTwitter, faYoutube, faLinkedin);

dom.watch();