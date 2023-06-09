<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use PhpParser\Node\Expr\Cast\String_;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("user")]
    private ?int $id = null;
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "nom doit etre non vide")]
    #[Groups("user")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "prenom doit etre non vide")]
    #[Groups("user")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "adresse doit etre non vide")]
    #[Groups("user")]
    private ?string $adresse = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "numero de telephone est vide")]
    #[Groups("user")]
    private ?String $num_tel = null;
    #[ORM\Column(length: 180, unique: true)]
    #[Assert\Email(message: "EMAIL IVALIDE")]
    #[Groups("user")]
    private ?string $email;

    

    #[ORM\Column]
    #[Groups("user")]
    private array $roles = [];


    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password;



    private ?string $confirmPassword = null;

    private $reset_token ;


    public ?string $rolle;



    #[ORM\Column]
    private ?bool $isVerified = null;

    #[ORM\Column]
    public ?bool $isBanned = null;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: Participation::class)]
    private Collection $Participation;

    #[ORM\OneToMany(mappedBy: 'User', targetEntity: Livraison::class)]
    private Collection $Livraison;

    public function __construct()
    {
        $this->Participation = new ArrayCollection();
        $this->Livraison = new ArrayCollection();
    }



    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getNumTel(): ?String
    {
        return $this->num_tel;
    }

    public function setNumTel(String $num_tel): self
    {
        $this->num_tel = $num_tel;

        return $this;
    }

    public function getToken(): ?string
    {
        return $this->reset_token;
    }

    public function setToken(string $reset_token): void
    {
        $this->reset_token = $reset_token;

       
    }

       

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    public function setConfirmPassword(string $confirmPass): self
    {
        $this->confirmPassword = $confirmPass;

        return $this;
    }
    public function getConfirmPassword(): ?string
    {
        return $this->confirmPassword;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): int
    {
        return  $this->id;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        // $roles = $this->roles;
        // guarantee every user at least has ROLE_USER


        //   return array_unique($roles);
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getRole(): ?string
    {
        return $this->rolle;
    }

    public function setRole(string $role): self
    {
        $this->rolle = $role;

        return $this;
    }





    public function isIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function isIsBanned(): ?bool
    {
        return $this->isBanned;
    }

    public function setIsBanned(bool $isBanned): self
    {
        $this->isBanned = $isBanned;

        return $this;
    }

    /**
     * @return Collection<int, Participation>
     */
    public function getParticipation(): Collection
    {
        return $this->Participation;
    }

    public function addParticipation(Participation $participation): self
    {
        if (!$this->Participation->contains($participation)) {
            $this->Participation->add($participation);
            $participation->setUser($this);
        }

        return $this;
    }

    public function removeParticipation(Participation $participation): self
    {
        if ($this->Participation->removeElement($participation)) {
            // set the owning side to null (unless already changed)
            if ($participation->getUser() === $this) {
                $participation->setUser(null);
            }
        }

        return $this;
    }

    
    public function __toString()
    {
        return $this->email;
    }

    /**
     * @return Collection<int, Livraison>
     */
    public function getLivraison(): Collection
    {
        return $this->Livraison;
    }

    public function addLivraison(Livraison $livraison): self
    {
        if (!$this->Livraison->contains($livraison)) {
            $this->Livraison->add($livraison);
            $livraison->setUser($this);
        }

        return $this;
    }

    public function removeLivraison(Livraison $livraison): self
    {
        if ($this->Livraison->removeElement($livraison)) {
            // set the owning side to null (unless already changed)
            if ($livraison->getUser() === $this) {
                $livraison->setUser(null);
            }
        }

        return $this;
    }

}
